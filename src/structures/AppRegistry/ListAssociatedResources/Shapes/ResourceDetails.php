<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAssociatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tagValue
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{tagValue?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
