<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseAssetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property list<Shapes\LicenseAssetGroupConfiguration>|null $LicenseAssetGroupConfigurations
 * @property list<string> $AssociatedLicenseAssetRulesetARNs
 * @property list<Shapes\LicenseAssetGroupProperty>|null $Properties
 * @property string $LicenseAssetGroupArn
 * @property 'ACTIVE'|'DISABLED'|'DELETED'|null $Status
 * @property string $ClientToken
 */
class UpdateLicenseAssetGroupRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     LicenseAssetGroupConfigurations?: list<Shapes\LicenseAssetGroupConfiguration>|null,
     *     AssociatedLicenseAssetRulesetARNs: list<string>,
     *     Properties?: list<Shapes\LicenseAssetGroupProperty>|null,
     *     LicenseAssetGroupArn: string,
     *     Status?: 'ACTIVE'|'DISABLED'|'DELETED'|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
