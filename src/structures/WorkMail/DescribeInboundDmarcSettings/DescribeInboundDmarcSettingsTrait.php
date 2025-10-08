<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeInboundDmarcSettings;

trait DescribeInboundDmarcSettingsTrait
{
    /**
     * @param DescribeInboundDmarcSettingsRequest $args
     * @return DescribeInboundDmarcSettingsResponse
     */
    public function describeInboundDmarcSettings(DescribeInboundDmarcSettingsRequest $args)
    {
        $result = parent::describeInboundDmarcSettings($args->toArray());
        return new DescribeInboundDmarcSettingsResponse($result->toArray());
    }
}
