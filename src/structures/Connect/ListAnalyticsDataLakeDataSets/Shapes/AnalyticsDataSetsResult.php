<?php

namespace Sunaoka\Aws\Structures\Connect\ListAnalyticsDataLakeDataSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataSetId
 * @property string|null $DataSetName
 */
class AnalyticsDataSetsResult extends Shape
{
    /**
     * @param array{
     *     DataSetId?: string|null,
     *     DataSetName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
