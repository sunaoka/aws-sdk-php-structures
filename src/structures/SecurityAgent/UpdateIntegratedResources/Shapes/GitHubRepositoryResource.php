<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $owner
 */
class GitHubRepositoryResource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     owner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
