<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDlpSettings;

trait ListDlpSettingsTrait
{
    /**
     * @param ListDlpSettingsRequest $args
     * @return ListDlpSettingsResponse
     */
    public function listDlpSettings(ListDlpSettingsRequest $args)
    {
        $result = parent::listDlpSettings($args->toArray());
        return new ListDlpSettingsResponse($result->toArray());
    }
}
