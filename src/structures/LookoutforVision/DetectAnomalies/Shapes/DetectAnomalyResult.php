<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource|null $Source
 * @property bool|null $IsAnomalous
 * @property float|null $Confidence
 * @property list<Anomaly>|null $Anomalies
 * @property \Psr\Http\Message\StreamInterface|null $AnomalyMask
 */
class DetectAnomalyResult extends Shape
{
    /**
     * @param array{
     *     Source?: ImageSource|null,
     *     IsAnomalous?: bool|null,
     *     Confidence?: float|null,
     *     Anomalies?: list<Anomaly>|null,
     *     AnomalyMask?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
