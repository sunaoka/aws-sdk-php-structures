<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $maxSampleCount
 * @property int $minimumSamplingIntervalMs
 * @property string $dataPartitionId
 */
class SignalInformation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     maxSampleCount?: int,
     *     minimumSamplingIntervalMs?: int,
     *     dataPartitionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
