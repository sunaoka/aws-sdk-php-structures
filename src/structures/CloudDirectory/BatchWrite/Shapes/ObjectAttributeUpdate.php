<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeKey $ObjectAttributeKey
 * @property ObjectAttributeAction $ObjectAttributeAction
 */
class ObjectAttributeUpdate extends Shape
{
    /**
     * @param array{
     *     ObjectAttributeKey?: AttributeKey,
     *     ObjectAttributeAction?: ObjectAttributeAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
