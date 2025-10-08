<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeEmergencyContactSettings;

trait DescribeEmergencyContactSettingsTrait
{
    /**
     * @param DescribeEmergencyContactSettingsRequest $args
     * @return DescribeEmergencyContactSettingsResponse
     */
    public function describeEmergencyContactSettings(DescribeEmergencyContactSettingsRequest $args)
    {
        $result = parent::describeEmergencyContactSettings($args->toArray());
        return new DescribeEmergencyContactSettingsResponse($result->toArray());
    }
}
