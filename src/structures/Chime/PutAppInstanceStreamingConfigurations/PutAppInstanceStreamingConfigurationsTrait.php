<?php

namespace Sunaoka\Aws\Structures\Chime\PutAppInstanceStreamingConfigurations;

trait PutAppInstanceStreamingConfigurationsTrait
{
    /**
     * @param PutAppInstanceStreamingConfigurationsRequest $args
     * @return PutAppInstanceStreamingConfigurationsResponse
     */
    public function putAppInstanceStreamingConfigurations(PutAppInstanceStreamingConfigurationsRequest $args)
    {
        $result = parent::putAppInstanceStreamingConfigurations($args->toArray());
        return new PutAppInstanceStreamingConfigurationsResponse($result->toArray());
    }
}
