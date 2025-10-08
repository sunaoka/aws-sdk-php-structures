<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData;

trait GetLaunchTemplateDataTrait
{
    /**
     * @param GetLaunchTemplateDataRequest $args
     * @return GetLaunchTemplateDataResponse
     */
    public function getLaunchTemplateData(GetLaunchTemplateDataRequest $args)
    {
        $result = parent::getLaunchTemplateData($args->toArray());
        return new GetLaunchTemplateDataResponse($result->toArray());
    }
}
