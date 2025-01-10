<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource $Source
 * @property bool $IsAnomalous
 * @property float $Confidence
 * @property list<Anomaly> $Anomalies
 * @property \Psr\Http\Message\StreamInterface $AnomalyMask
 */
class DetectAnomalyResult extends Shape
{
    /**
     * @param array{
     *     Source?: ImageSource,
     *     IsAnomalous?: bool,
     *     Confidence?: float,
     *     Anomalies?: list<Anomaly>,
     *     AnomalyMask?: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
