<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectIdentifier
 * @property string $LinkName
 */
class ObjectIdentifierAndLinkNameTuple extends Shape
{
    /**
     * @param array{
     *     ObjectIdentifier?: string,
     *     LinkName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
