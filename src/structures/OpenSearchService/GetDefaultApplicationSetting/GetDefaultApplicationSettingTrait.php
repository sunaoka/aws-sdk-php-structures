<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDefaultApplicationSetting;

trait GetDefaultApplicationSettingTrait
{
    /**
     * @param GetDefaultApplicationSettingRequest $args
     * @return GetDefaultApplicationSettingResponse
     */
    public function getDefaultApplicationSetting(GetDefaultApplicationSettingRequest $args)
    {
        $result = parent::getDefaultApplicationSetting($args->toArray());
        return new GetDefaultApplicationSettingResponse($result->toArray());
    }
}
