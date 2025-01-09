<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TypedLinkSpecifier $TypedLinkSpecifier
 * @property list<LinkAttributeUpdate> $AttributeUpdates
 */
class BatchUpdateLinkAttributes extends Shape
{
    /**
     * @param array{
     *     TypedLinkSpecifier: TypedLinkSpecifier,
     *     AttributeUpdates: list<LinkAttributeUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
