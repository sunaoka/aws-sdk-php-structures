<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDlpSetting;

trait CreateDlpSettingTrait
{
    /**
     * @param CreateDlpSettingRequest $args
     * @return CreateDlpSettingResponse
     */
    public function createDlpSetting(CreateDlpSettingRequest $args)
    {
        $result = parent::createDlpSetting($args->toArray());
        return new CreateDlpSettingResponse($result->toArray());
    }
}
