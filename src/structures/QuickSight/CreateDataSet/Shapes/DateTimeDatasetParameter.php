<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ValueType
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $TimeGranularity
 * @property DateTimeDatasetParameterDefaultValues|null $DefaultValues
 */
class DateTimeDatasetParameter extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     ValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null,
     *     DefaultValues?: DateTimeDatasetParameterDefaultValues|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
