<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<1, 4294967295>|null $maxSampleCount
 * @property int<0, 4294967295>|null $minimumSamplingIntervalMs
 * @property string|null $dataPartitionId
 */
class SignalInformation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     maxSampleCount?: int<1, 4294967295>|null,
     *     minimumSamplingIntervalMs?: int<0, 4294967295>|null,
     *     dataPartitionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
