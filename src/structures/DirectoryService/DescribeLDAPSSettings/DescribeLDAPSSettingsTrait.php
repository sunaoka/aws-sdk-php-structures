<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeLDAPSSettings;

trait DescribeLDAPSSettingsTrait
{
    /**
     * @param DescribeLDAPSSettingsRequest $args
     * @return DescribeLDAPSSettingsResponse
     */
    public function describeLDAPSSettings(DescribeLDAPSSettingsRequest $args)
    {
        $result = parent::describeLDAPSSettings($args->toArray());
        return new DescribeLDAPSSettingsResponse($result->toArray());
    }
}
