<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'|'AZURE_DEVOPS'|'JIRA'|null $provider
 * @property string|null $integrationId
 * @property string|null $projectKey
 * @property string|null $issueKey
 * @property string|null $issueId
 * @property string|null $issueUrl
 * @property string|null $siteUrl
 */
class LinkedIssue extends Shape
{
    /**
     * @param array{
     *     provider?: 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'|'AZURE_DEVOPS'|'JIRA'|null,
     *     integrationId?: string|null,
     *     projectKey?: string|null,
     *     issueKey?: string|null,
     *     issueId?: string|null,
     *     issueUrl?: string|null,
     *     siteUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
