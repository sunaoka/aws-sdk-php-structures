<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseAssetRuleset;

trait DeleteLicenseAssetRulesetTrait
{
    /**
     * @param DeleteLicenseAssetRulesetRequest $args
     * @return DeleteLicenseAssetRulesetResponse
     */
    public function deleteLicenseAssetRuleset(DeleteLicenseAssetRulesetRequest $args)
    {
        $result = parent::deleteLicenseAssetRuleset($args->toArray());
        return new DeleteLicenseAssetRulesetResponse($result->toArray());
    }
}
