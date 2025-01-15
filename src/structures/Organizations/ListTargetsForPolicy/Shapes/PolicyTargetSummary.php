<?php

namespace Sunaoka\Aws\Structures\Organizations\ListTargetsForPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetId
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT'|null $Type
 */
class PolicyTargetSummary extends Shape
{
    /**
     * @param array{
     *     TargetId?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
