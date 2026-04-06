<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\PutDefaultApplicationSetting;

trait PutDefaultApplicationSettingTrait
{
    /**
     * @param PutDefaultApplicationSettingRequest $args
     * @return PutDefaultApplicationSettingResponse
     */
    public function putDefaultApplicationSetting(PutDefaultApplicationSettingRequest $args)
    {
        $result = parent::putDefaultApplicationSetting($args->toArray());
        return new PutDefaultApplicationSettingResponse($result->toArray());
    }
}
