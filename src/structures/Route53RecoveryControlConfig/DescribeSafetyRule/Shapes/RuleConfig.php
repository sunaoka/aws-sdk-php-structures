<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeSafetyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Inverted
 * @property int $Threshold
 * @property 'ATLEAST'|'AND'|'OR' $Type
 */
class RuleConfig extends Shape
{
    /**
     * @param array{
     *     Inverted: bool,
     *     Threshold: int,
     *     Type: 'ATLEAST'|'AND'|'OR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
