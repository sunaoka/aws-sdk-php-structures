<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseAssetRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseAssetRulesetArn
 */
class DeleteLicenseAssetRulesetRequest extends Request
{
    /**
     * @param array{LicenseAssetRulesetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
