<?php

namespace Sunaoka\Aws\Structures\FIS\GetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceType
 */
class ActionTarget extends Shape
{
    /**
     * @param array{resourceType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
