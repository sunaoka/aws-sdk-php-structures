<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 */
class SuppressionAttributes extends Shape
{
    /**
     * @param array{SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
