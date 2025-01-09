<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property DateTimeDefaultValues $DefaultValues
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 * @property DateTimeValueWhenUnsetConfiguration $ValueWhenUnset
 * @property list<MappedDataSetParameter> $MappedDataSetParameters
 */
class DateTimeParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DefaultValues?: DateTimeDefaultValues,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     ValueWhenUnset?: DateTimeValueWhenUnsetConfiguration,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
