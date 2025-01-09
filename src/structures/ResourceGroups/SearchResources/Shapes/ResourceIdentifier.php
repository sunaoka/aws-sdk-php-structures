<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $ResourceType
 */
class ResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ResourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
