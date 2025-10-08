<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteAccountSetting;

trait DeleteAccountSettingTrait
{
    /**
     * @param DeleteAccountSettingRequest $args
     * @return DeleteAccountSettingResponse
     */
    public function deleteAccountSetting(DeleteAccountSettingRequest $args)
    {
        $result = parent::deleteAccountSetting($args->toArray());
        return new DeleteAccountSettingResponse($result->toArray());
    }
}
