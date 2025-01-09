<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BOUNCE'|'COMPLAINT'> $SuppressedReasons
 */
class SuppressionAttributes extends Shape
{
    /**
     * @param array{SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
