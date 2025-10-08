<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutInboundDmarcSettings;

trait PutInboundDmarcSettingsTrait
{
    /**
     * @param PutInboundDmarcSettingsRequest $args
     * @return PutInboundDmarcSettingsResponse
     */
    public function putInboundDmarcSettings(PutInboundDmarcSettingsRequest $args)
    {
        $result = parent::putInboundDmarcSettings($args->toArray());
        return new PutInboundDmarcSettingsResponse($result->toArray());
    }
}
