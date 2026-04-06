<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseAssetRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseAssetRulesetArn
 */
class GetLicenseAssetRulesetRequest extends Request
{
    /**
     * @param array{LicenseAssetRulesetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
