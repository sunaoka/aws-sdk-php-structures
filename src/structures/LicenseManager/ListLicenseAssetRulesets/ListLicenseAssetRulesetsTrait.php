<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseAssetRulesets;

trait ListLicenseAssetRulesetsTrait
{
    /**
     * @param ListLicenseAssetRulesetsRequest $args
     * @return ListLicenseAssetRulesetsResponse
     */
    public function listLicenseAssetRulesets(ListLicenseAssetRulesetsRequest $args)
    {
        $result = parent::listLicenseAssetRulesets($args->toArray());
        return new ListLicenseAssetRulesetsResponse($result->toArray());
    }
}
