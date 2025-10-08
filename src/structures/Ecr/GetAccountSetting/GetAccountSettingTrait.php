<?php

namespace Sunaoka\Aws\Structures\Ecr\GetAccountSetting;

trait GetAccountSettingTrait
{
    /**
     * @param GetAccountSettingRequest $args
     * @return GetAccountSettingResponse
     */
    public function getAccountSetting(GetAccountSettingRequest $args)
    {
        $result = parent::getAccountSetting($args->toArray());
        return new GetAccountSettingResponse($result->toArray());
    }
}
