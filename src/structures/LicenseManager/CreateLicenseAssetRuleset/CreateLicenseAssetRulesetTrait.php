<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseAssetRuleset;

trait CreateLicenseAssetRulesetTrait
{
    /**
     * @param CreateLicenseAssetRulesetRequest $args
     * @return CreateLicenseAssetRulesetResponse
     */
    public function createLicenseAssetRuleset(CreateLicenseAssetRulesetRequest $args)
    {
        $result = parent::createLicenseAssetRuleset($args->toArray());
        return new CreateLicenseAssetRulesetResponse($result->toArray());
    }
}
