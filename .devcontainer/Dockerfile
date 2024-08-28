FROM mcr.microsoft.com/devcontainers/base:ubuntu

# Install the xz-utils package
# RUN apt-get update && apt-get install -y xz-utils

ARG USERNAME=vscode

# expose PHP xdebug port 9003
EXPOSE 9003

# expose wp-env ports
EXPOSE 8888
EXPOSE 8889

# enable persisted bash completion
# https://code.visualstudio.com/remote/advancedcontainers/persist-bash-history
RUN SNIPPET="export PROMPT_COMMAND='history -a' && export HISTFILE=/commandhistory/.bash_history" \
    && mkdir /commandhistory \
    && touch /commandhistory/.bash_history \
    && chown -R $USERNAME /commandhistory \
    && echo "$SNIPPET" >> "/home/$USERNAME/.bashrc"

USER vscode

# Install pnpm
RUN curl https://get.pnpm.io/install.sh | ENV="$HOME/.bashrc" PNPM_VERSION=9.9.0 SHELL="$(which bash)" bash -
ENV PATH="/home/$USER_NAME/.local/share/pnpm:${PATH}"


