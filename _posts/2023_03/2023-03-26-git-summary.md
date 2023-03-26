---
title: Git 명령어
excerpt: Git 명령어 모음
comments: true
toc: true # 목차
toc_sticky: true # True = 스크롤을 이동해도 항상 화면 위쪽에 고정됨
toc_label: "Git" # toc의 제목
last_modified_at: "2023-03-25 17:08:14 +0900"
published: true
categories:
  - Git

tags:
  - [Github, Git]
---

## git 명령어

- 터미널 창에 bash로 입력하며 대소문자를 구분하지 않는다.

|      명령어      |        설명         |
| :--------------: | :-----------------: |
|       git        |     명령어 모음     |
|     git log      |   지금까지 한 log   |
|     git init     |    버전관리 시작    |
|    git status    |      현재 상태      |
| git add 이름.txt | 얘네를 stage로 올림 |

**1. add는 working directory의 수정사항을 stage로 올림**
**2. add는 untracked 파일을 tracked로 바꿔줌**
**3. 충돌을 해결했음을 알림**

|                          명령어                           |                  설명                   |
| :-------------------------------------------------------: | :-------------------------------------: |
|           git config --global user.name "이름"            |        git 사용자 이름 최초 설정        |
|          git config --global user.email "email"           |       git 사용자 이메일 최초 설정       |
|                   git commit -m "이름"                    |                버전 생성                |
|                        git reflog                         |         지금까지 했던 모든 기록         |
|                  git commit -a -m "이름"                  | 한번이라도 add 됐던 애들 전부 다 commit |
|                      git branch 이름                      |               branch 생성               |
|              git log --oneline --all --graph              |           git log 업그레이드            |
|                   git merge 브랜치이름                    |  'head'가 써있는'애를' 합치려 하는 것   |
|       git config --global core.editor "code --wait"       |       기본 에디터를 VScode로 변경       |
|                git remote add 이름 깃주소                 |     원격저장소를 컴퓨터에게 알려줌      |
| git config --global alias.l "log --oneline --all --graph" |         뒤의 명령어를 l로 사용          |
|                         ctrl + ,                          |             설정 창 띄우기              |
|                    git checkout 해쉬값                    |                head 이동                |
|                  git reset --head 해쉬값                  |      master 이동 (attached일 경우)      |

<br>

**언어별 .gitignore를 쉽게 찾는 법**

[.gitignore.io](https://www.toptal.com/developers/gitignore/)
