<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $count
 * @property list<string>|null $cidrs
 * @property list<int<0, 65535>>|null $ports
 * @property double|null $number
 * @property list<double>|null $numbers
 * @property list<string>|null $strings
 */
class MetricValue extends Shape
{
    /**
     * @param array{
     *     count?: int<0, max>|null,
     *     cidrs?: list<string>|null,
     *     ports?: list<int<0, 65535>>|null,
     *     number?: double|null,
     *     numbers?: list<double>|null,
     *     strings?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
