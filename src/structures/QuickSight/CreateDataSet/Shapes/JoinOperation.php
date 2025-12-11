<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource $LeftOperand
 * @property TransformOperationSource $RightOperand
 * @property 'INNER'|'OUTER'|'LEFT'|'RIGHT' $Type
 * @property string $OnClause
 * @property JoinOperandProperties|null $LeftOperandProperties
 * @property JoinOperandProperties|null $RightOperandProperties
 */
class JoinOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     LeftOperand: TransformOperationSource,
     *     RightOperand: TransformOperationSource,
     *     Type: 'INNER'|'OUTER'|'LEFT'|'RIGHT',
     *     OnClause: string,
     *     LeftOperandProperties?: JoinOperandProperties|null,
     *     RightOperandProperties?: JoinOperandProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
