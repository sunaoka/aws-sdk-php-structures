<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\SampleChannelData;

trait SampleChannelDataTrait
{
    /**
     * @param SampleChannelDataRequest $args
     * @return SampleChannelDataResponse
     */
    public function sampleChannelData(SampleChannelDataRequest $args)
    {
        $result = parent::sampleChannelData($args->toArray());
        return new SampleChannelDataResponse($result->toArray());
    }
}
