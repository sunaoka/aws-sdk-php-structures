<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeClientAuthenticationSettings;

trait DescribeClientAuthenticationSettingsTrait
{
    /**
     * @param DescribeClientAuthenticationSettingsRequest $args
     * @return DescribeClientAuthenticationSettingsResponse
     */
    public function describeClientAuthenticationSettings(DescribeClientAuthenticationSettingsRequest $args)
    {
        $result = parent::describeClientAuthenticationSettings($args->toArray());
        return new DescribeClientAuthenticationSettingsResponse($result->toArray());
    }
}
