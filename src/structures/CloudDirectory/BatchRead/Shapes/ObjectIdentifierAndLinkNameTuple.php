<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObjectIdentifier
 * @property string|null $LinkName
 */
class ObjectIdentifierAndLinkNameTuple extends Shape
{
    /**
     * @param array{
     *     ObjectIdentifier?: string|null,
     *     LinkName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
