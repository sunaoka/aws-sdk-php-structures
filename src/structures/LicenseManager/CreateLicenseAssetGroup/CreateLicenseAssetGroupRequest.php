<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseAssetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\LicenseAssetGroupConfiguration> $LicenseAssetGroupConfigurations
 * @property list<string> $AssociatedLicenseAssetRulesetARNs
 * @property list<Shapes\LicenseAssetGroupProperty>|null $Properties
 * @property list<Shapes\Tag>|null $Tags
 * @property string $ClientToken
 */
class CreateLicenseAssetGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     LicenseAssetGroupConfigurations: list<Shapes\LicenseAssetGroupConfiguration>,
     *     AssociatedLicenseAssetRulesetARNs: list<string>,
     *     Properties?: list<Shapes\LicenseAssetGroupProperty>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
