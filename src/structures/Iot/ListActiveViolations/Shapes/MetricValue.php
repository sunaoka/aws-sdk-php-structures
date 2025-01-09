<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property list<string> $cidrs
 * @property list<int> $ports
 * @property double $number
 * @property list<double> $numbers
 * @property list<string> $strings
 */
class MetricValue extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     cidrs?: list<string>,
     *     ports?: list<int>,
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
