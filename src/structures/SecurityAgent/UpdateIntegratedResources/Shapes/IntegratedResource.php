<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubRepositoryResource|null $githubRepository
 * @property GitLabRepositoryResource|null $gitlabRepository
 * @property BitbucketRepositoryResource|null $bitbucketRepository
 * @property ConfluenceDocumentResource|null $confluenceDocument
 * @property AzureDevOpsRepositoryResource|null $azureDevOpsRepository
 */
class IntegratedResource extends Shape
{
    /**
     * @param array{
     *     githubRepository?: GitHubRepositoryResource|null,
     *     gitlabRepository?: GitLabRepositoryResource|null,
     *     bitbucketRepository?: BitbucketRepositoryResource|null,
     *     confluenceDocument?: ConfluenceDocumentResource|null,
     *     azureDevOpsRepository?: AzureDevOpsRepositoryResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
