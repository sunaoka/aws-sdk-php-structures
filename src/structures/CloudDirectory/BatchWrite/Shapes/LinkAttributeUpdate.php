<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeKey $AttributeKey
 * @property LinkAttributeAction $AttributeAction
 */
class LinkAttributeUpdate extends Shape
{
    /**
     * @param array{
     *     AttributeKey?: AttributeKey,
     *     AttributeAction?: LinkAttributeAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
