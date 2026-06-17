<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubResourceCapabilities|null $github
 * @property GitLabResourceCapabilities|null $gitlab
 * @property BitbucketResourceCapabilities|null $bitbucket
 * @property ConfluenceResourceCapabilities|null $confluence
 */
class ProviderResourceCapabilities extends Shape
{
    /**
     * @param array{
     *     github?: GitHubResourceCapabilities|null,
     *     gitlab?: GitLabResourceCapabilities|null,
     *     bitbucket?: BitbucketResourceCapabilities|null,
     *     confluence?: ConfluenceResourceCapabilities|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
