<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceNetworkPerformanceOptions;

trait ModifyInstanceNetworkPerformanceOptionsTrait
{
    /**
     * @param ModifyInstanceNetworkPerformanceOptionsRequest $args
     * @return ModifyInstanceNetworkPerformanceOptionsResponse
     */
    public function modifyInstanceNetworkPerformanceOptions(ModifyInstanceNetworkPerformanceOptionsRequest $args)
    {
        $result = parent::modifyInstanceNetworkPerformanceOptions($args->toArray());
        return new ModifyInstanceNetworkPerformanceOptionsResponse($result->toArray());
    }
}
