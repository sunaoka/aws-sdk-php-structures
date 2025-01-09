<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MeasureFieldId
 * @property list<ColumnIdentifier> $ContributorDimensions
 */
class ContributionAnalysisDefault extends Shape
{
    /**
     * @param array{
     *     MeasureFieldId: string,
     *     ContributorDimensions: list<ColumnIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
