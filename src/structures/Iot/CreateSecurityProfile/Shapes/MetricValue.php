<?php

namespace Sunaoka\Aws\Structures\Iot\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $count
 * @property list<string> $cidrs
 * @property list<int<0, 65535>> $ports
 * @property double $number
 * @property list<double> $numbers
 * @property list<string> $strings
 */
class MetricValue extends Shape
{
    /**
     * @param array{
     *     count?: int<0, max>,
     *     cidrs?: list<string>,
     *     ports?: list<int<0, 65535>>,
     *     number?: double,
     *     numbers?: list<double>,
     *     strings?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
