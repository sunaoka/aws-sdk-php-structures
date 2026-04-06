<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataProtection> $DataProtections
 */
class DataProtectionConfig extends Shape
{
    /**
     * @param array{DataProtections: list<DataProtection>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
