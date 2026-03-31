<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubRepositoryMetadata|null $githubRepository
 */
class IntegratedResourceMetadata extends Shape
{
    /**
     * @param array{githubRepository?: GitHubRepositoryMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
