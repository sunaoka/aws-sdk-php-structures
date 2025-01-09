<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BOUNCE'|'COMPLAINT'> $SuppressedReasons
 */
class SuppressionOptions extends Shape
{
    /**
     * @param array{SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
