<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseAssetRuleset;

trait GetLicenseAssetRulesetTrait
{
    /**
     * @param GetLicenseAssetRulesetRequest $args
     * @return GetLicenseAssetRulesetResponse
     */
    public function getLicenseAssetRuleset(GetLicenseAssetRulesetRequest $args)
    {
        $result = parent::getLicenseAssetRuleset($args->toArray());
        return new GetLicenseAssetRulesetResponse($result->toArray());
    }
}
