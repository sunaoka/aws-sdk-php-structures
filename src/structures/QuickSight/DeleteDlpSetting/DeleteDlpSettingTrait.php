<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteDlpSetting;

trait DeleteDlpSettingTrait
{
    /**
     * @param DeleteDlpSettingRequest $args
     * @return DeleteDlpSettingResponse
     */
    public function deleteDlpSetting(DeleteDlpSettingRequest $args)
    {
        $result = parent::deleteDlpSetting($args->toArray());
        return new DeleteDlpSettingResponse($result->toArray());
    }
}
