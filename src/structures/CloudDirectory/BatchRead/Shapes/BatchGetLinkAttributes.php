<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TypedLinkSpecifier $TypedLinkSpecifier
 * @property list<string> $AttributeNames
 */
class BatchGetLinkAttributes extends Shape
{
    /**
     * @param array{
     *     TypedLinkSpecifier: TypedLinkSpecifier,
     *     AttributeNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
