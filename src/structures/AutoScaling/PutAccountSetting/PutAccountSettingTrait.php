<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutAccountSetting;

trait PutAccountSettingTrait
{
    /**
     * @param PutAccountSettingRequest $args
     * @return PutAccountSettingResponse
     */
    public function putAccountSetting(PutAccountSettingRequest $args)
    {
        $result = parent::putAccountSetting($args->toArray());
        return new PutAccountSettingResponse($result->toArray());
    }
}
