<?php

namespace Sunaoka\Aws\Structures\Iam\SetSecurityTokenServicePreferences;

trait SetSecurityTokenServicePreferencesTrait
{
    /**
     * @param SetSecurityTokenServicePreferencesRequest $args
     * @return void
     */
    public function setSecurityTokenServicePreferences(SetSecurityTokenServicePreferencesRequest $args)
    {
        parent::setSecurityTokenServicePreferences($args->toArray());
    }
}
