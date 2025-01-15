<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $Position
 * @property PositionalAccuracy|null $Accuracy
 * @property double|null $DeviationDistance
 * @property bool $ProxyDetected
 */
class InferredState extends Shape
{
    /**
     * @param array{
     *     Position?: list<double>|null,
     *     Accuracy?: PositionalAccuracy|null,
     *     DeviationDistance?: double|null,
     *     ProxyDetected: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
