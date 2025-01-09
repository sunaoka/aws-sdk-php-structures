<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<1, 4294967295> $maxSampleCount
 * @property int<0, 4294967295> $minimumSamplingIntervalMs
 * @property string $dataPartitionId
 */
class SignalInformation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     maxSampleCount?: int<1, 4294967295>,
     *     minimumSamplingIntervalMs?: int<0, 4294967295>,
     *     dataPartitionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
