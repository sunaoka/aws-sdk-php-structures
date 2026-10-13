<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubRepositoryMetadata|null $githubRepository
 * @property GitLabRepositoryMetadata|null $gitlabRepository
 * @property BitbucketRepositoryMetadata|null $bitbucketRepository
 * @property ConfluenceDocumentMetadata|null $confluenceDocument
 * @property AzureDevOpsRepositoryMetadata|null $azureDevOpsRepository
 * @property JiraProjectMetadata|null $jiraProject
 */
class IntegratedResourceMetadata extends Shape
{
    /**
     * @param array{
     *     githubRepository?: GitHubRepositoryMetadata|null,
     *     gitlabRepository?: GitLabRepositoryMetadata|null,
     *     bitbucketRepository?: BitbucketRepositoryMetadata|null,
     *     confluenceDocument?: ConfluenceDocumentMetadata|null,
     *     azureDevOpsRepository?: AzureDevOpsRepositoryMetadata|null,
     *     jiraProject?: JiraProjectMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
