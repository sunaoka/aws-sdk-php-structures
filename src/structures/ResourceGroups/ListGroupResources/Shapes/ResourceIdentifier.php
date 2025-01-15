<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 */
class ResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
