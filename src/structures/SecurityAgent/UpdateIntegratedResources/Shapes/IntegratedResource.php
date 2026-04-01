<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubRepositoryResource|null $githubRepository
 */
class IntegratedResource extends Shape
{
    /**
     * @param array{githubRepository?: GitHubRepositoryResource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
