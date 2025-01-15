<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringParameter>|null $StringParameters
 * @property list<IntegerParameter>|null $IntegerParameters
 * @property list<DecimalParameter>|null $DecimalParameters
 * @property list<DateTimeParameter>|null $DateTimeParameters
 */
class Parameters extends Shape
{
    /**
     * @param array{
     *     StringParameters?: list<StringParameter>|null,
     *     IntegerParameters?: list<IntegerParameter>|null,
     *     DecimalParameters?: list<DecimalParameter>|null,
     *     DateTimeParameters?: list<DateTimeParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
