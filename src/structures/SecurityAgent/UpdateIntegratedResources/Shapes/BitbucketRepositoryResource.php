<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $workspace
 */
class BitbucketRepositoryResource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     workspace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
