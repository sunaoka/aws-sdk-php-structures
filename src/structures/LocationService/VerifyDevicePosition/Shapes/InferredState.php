<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Position
 * @property PositionalAccuracy $Accuracy
 * @property double $DeviationDistance
 * @property bool $ProxyDetected
 */
class InferredState extends Shape
{
    /**
     * @param array{
     *     Position?: list<double>,
     *     Accuracy?: PositionalAccuracy,
     *     DeviationDistance?: double,
     *     ProxyDetected: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
