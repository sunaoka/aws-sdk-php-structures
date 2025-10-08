<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ALL_PULL_REQUESTS'|'FORK_PULL_REQUESTS' $requiresCommentApproval
 * @property list<'GITHUB_READ'|'GITHUB_TRIAGE'|'GITHUB_WRITE'|'GITHUB_MAINTAIN'|'GITHUB_ADMIN'|'GITLAB_GUEST'|'GITLAB_PLANNER'|'GITLAB_REPORTER'|'GITLAB_DEVELOPER'|'GITLAB_MAINTAINER'|'GITLAB_OWNER'|'BITBUCKET_READ'|'BITBUCKET_WRITE'|'BITBUCKET_ADMIN'>|null $approverRoles
 */
class PullRequestBuildPolicy extends Shape
{
    /**
     * @param array{
     *     requiresCommentApproval: 'DISABLED'|'ALL_PULL_REQUESTS'|'FORK_PULL_REQUESTS',
     *     approverRoles?: list<'GITHUB_READ'|'GITHUB_TRIAGE'|'GITHUB_WRITE'|'GITHUB_MAINTAIN'|'GITHUB_ADMIN'|'GITLAB_GUEST'|'GITLAB_PLANNER'|'GITLAB_REPORTER'|'GITLAB_DEVELOPER'|'GITLAB_MAINTAINER'|'GITLAB_OWNER'|'BITBUCKET_READ'|'BITBUCKET_WRITE'|'BITBUCKET_ADMIN'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
