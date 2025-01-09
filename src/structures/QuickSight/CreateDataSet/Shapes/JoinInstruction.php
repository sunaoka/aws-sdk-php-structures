<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LeftOperand
 * @property string $RightOperand
 * @property JoinKeyProperties $LeftJoinKeyProperties
 * @property JoinKeyProperties $RightJoinKeyProperties
 * @property 'INNER'|'OUTER'|'LEFT'|'RIGHT' $Type
 * @property string $OnClause
 */
class JoinInstruction extends Shape
{
    /**
     * @param array{
     *     LeftOperand: string,
     *     RightOperand: string,
     *     LeftJoinKeyProperties?: JoinKeyProperties,
     *     RightJoinKeyProperties?: JoinKeyProperties,
     *     Type: 'INNER'|'OUTER'|'LEFT'|'RIGHT',
     *     OnClause: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
