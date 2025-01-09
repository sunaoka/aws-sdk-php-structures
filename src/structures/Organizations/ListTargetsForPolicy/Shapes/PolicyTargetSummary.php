<?php

namespace Sunaoka\Aws\Structures\Organizations\ListTargetsForPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetId
 * @property string $Arn
 * @property string $Name
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT' $Type
 */
class PolicyTargetSummary extends Shape
{
    /**
     * @param array{
     *     TargetId?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Type?: 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
