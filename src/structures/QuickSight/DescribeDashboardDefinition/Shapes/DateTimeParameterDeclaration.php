<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property DateTimeDefaultValues|null $DefaultValues
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $TimeGranularity
 * @property DateTimeValueWhenUnsetConfiguration|null $ValueWhenUnset
 * @property list<MappedDataSetParameter>|null $MappedDataSetParameters
 */
class DateTimeParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DefaultValues?: DateTimeDefaultValues|null,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null,
     *     ValueWhenUnset?: DateTimeValueWhenUnsetConfiguration|null,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
