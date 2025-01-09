<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringParameter> $StringParameters
 * @property list<IntegerParameter> $IntegerParameters
 * @property list<DecimalParameter> $DecimalParameters
 * @property list<DateTimeParameter> $DateTimeParameters
 */
class Parameters extends Shape
{
    /**
     * @param array{
     *     StringParameters?: list<StringParameter>,
     *     IntegerParameters?: list<IntegerParameter>,
     *     DecimalParameters?: list<DecimalParameter>,
     *     DateTimeParameters?: list<DateTimeParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
