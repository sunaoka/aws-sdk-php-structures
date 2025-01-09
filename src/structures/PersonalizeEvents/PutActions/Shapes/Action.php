<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property string $properties
 */
class Action extends Shape
{
    /**
     * @param array{
     *     actionId: string,
     *     properties?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
