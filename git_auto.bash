#!/bin/bash
git status
echo "Enter branch name"
read branch
git checkout -b $branch
git status
git add *
git status
git commit
git status
git push origin $branch