<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseAssetRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property list<Shapes\LicenseAssetRule> $Rules
 * @property string $LicenseAssetRulesetArn
 * @property string $ClientToken
 */
class UpdateLicenseAssetRulesetRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Rules: list<Shapes\LicenseAssetRule>,
     *     LicenseAssetRulesetArn: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
