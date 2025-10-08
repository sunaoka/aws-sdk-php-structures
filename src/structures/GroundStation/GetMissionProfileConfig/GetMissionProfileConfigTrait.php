<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfileConfig;

trait GetMissionProfileConfigTrait
{
    /**
     * @param GetMissionProfileConfigRequest $args
     * @return GetMissionProfileConfigResponse
     */
    public function getMissionProfileConfig(GetMissionProfileConfigRequest $args)
    {
        $result = parent::getMissionProfileConfig($args->toArray());
        return new GetMissionProfileConfigResponse($result->toArray());
    }
}
