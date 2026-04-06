<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseAssetRuleset;

trait UpdateLicenseAssetRulesetTrait
{
    /**
     * @param UpdateLicenseAssetRulesetRequest $args
     * @return UpdateLicenseAssetRulesetResponse
     */
    public function updateLicenseAssetRuleset(UpdateLicenseAssetRulesetRequest $args)
    {
        $result = parent::updateLicenseAssetRuleset($args->toArray());
        return new UpdateLicenseAssetRulesetResponse($result->toArray());
    }
}
