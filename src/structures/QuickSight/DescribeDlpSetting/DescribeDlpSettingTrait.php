<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDlpSetting;

trait DescribeDlpSettingTrait
{
    /**
     * @param DescribeDlpSettingRequest $args
     * @return DescribeDlpSettingResponse
     */
    public function describeDlpSetting(DescribeDlpSettingRequest $args)
    {
        $result = parent::describeDlpSetting($args->toArray());
        return new DescribeDlpSettingResponse($result->toArray());
    }
}
