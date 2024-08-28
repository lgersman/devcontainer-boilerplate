# devcontainer-boilerplate

# development

## prerequisites

- docker

- (optional) vscode

## setup

- `pnpm install`

- `pnpm start`

## setup using dev container

- install vscode

- install vscode extension `ms-vscode-remote.remote-containers`

- open vscode and follow the directions or open the devcontainer in vscode

## snippets

- execute `composer --version` in dev container : `pnpm exec devcontainer exec --workspace-folder $(pwd) composer --version`

- execute `pnpm exec devcontainer build --workspace-folder $(pwd)` to rebuild the devcontainer image

## Codespaces

[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?hide_repo_select=true&ref=main&repo=848691489&devcontainer_path=.devcontainer%2Fdevcontainer.json&location=WestEurope)

If you want to use Git hooks for your codespace, then you should set up hooks using the devcontainer.json lifecycle scripts, such as postCreateCommand

# Links

- https://github.com/devcontainers/ci

  A GitHub Action and Azure DevOps Task designed to simplify using Dev Containers (https://containers.dev) in CI/CD systems.

- https://github.com/devcontainers/cli

  A reference implementation for the specification that can create and configure a dev container from a devcontainer.json.
