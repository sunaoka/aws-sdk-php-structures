<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDlpSetting;

trait UpdateDlpSettingTrait
{
    /**
     * @param UpdateDlpSettingRequest $args
     * @return UpdateDlpSettingResponse
     */
    public function updateDlpSetting(UpdateDlpSettingRequest $args)
    {
        $result = parent::updateDlpSetting($args->toArray());
        return new UpdateDlpSettingResponse($result->toArray());
    }
}
