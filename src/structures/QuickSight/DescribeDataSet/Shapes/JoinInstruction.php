<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LeftOperand
 * @property string $RightOperand
 * @property JoinKeyProperties|null $LeftJoinKeyProperties
 * @property JoinKeyProperties|null $RightJoinKeyProperties
 * @property 'INNER'|'OUTER'|'LEFT'|'RIGHT' $Type
 * @property string $OnClause
 */
class JoinInstruction extends Shape
{
    /**
     * @param array{
     *     LeftOperand: string,
     *     RightOperand: string,
     *     LeftJoinKeyProperties?: JoinKeyProperties|null,
     *     RightJoinKeyProperties?: JoinKeyProperties|null,
     *     Type: 'INNER'|'OUTER'|'LEFT'|'RIGHT',
     *     OnClause: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
