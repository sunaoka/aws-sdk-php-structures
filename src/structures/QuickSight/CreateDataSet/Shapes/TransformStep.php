<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportTableOperation|null $ImportTableStep
 * @property ProjectOperation|null $ProjectStep
 * @property FiltersOperation|null $FiltersStep
 * @property CreateColumnsOperation|null $CreateColumnsStep
 * @property RenameColumnsOperation|null $RenameColumnsStep
 * @property CastColumnTypesOperation|null $CastColumnTypesStep
 * @property JoinOperation|null $JoinStep
 * @property AggregateOperation|null $AggregateStep
 * @property PivotOperation|null $PivotStep
 * @property UnpivotOperation|null $UnpivotStep
 * @property AppendOperation|null $AppendStep
 */
class TransformStep extends Shape
{
    /**
     * @param array{
     *     ImportTableStep?: ImportTableOperation|null,
     *     ProjectStep?: ProjectOperation|null,
     *     FiltersStep?: FiltersOperation|null,
     *     CreateColumnsStep?: CreateColumnsOperation|null,
     *     RenameColumnsStep?: RenameColumnsOperation|null,
     *     CastColumnTypesStep?: CastColumnTypesOperation|null,
     *     JoinStep?: JoinOperation|null,
     *     AggregateStep?: AggregateOperation|null,
     *     PivotStep?: PivotOperation|null,
     *     UnpivotStep?: UnpivotOperation|null,
     *     AppendStep?: AppendOperation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
