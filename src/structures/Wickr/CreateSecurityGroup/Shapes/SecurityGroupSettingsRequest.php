<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $lockoutThreshold
 * @property list<string>|null $permittedNetworks
 * @property bool|null $enableGuestFederation
 * @property bool|null $globalFederation
 * @property int|null $federationMode
 * @property bool|null $enableRestrictedGlobalFederation
 * @property list<WickrAwsNetworks>|null $permittedWickrAwsNetworks
 * @property list<PermittedWickrEnterpriseNetwork>|null $permittedWickrEnterpriseNetworks
 */
class SecurityGroupSettingsRequest extends Shape
{
    /**
     * @param array{
     *     lockoutThreshold?: int|null,
     *     permittedNetworks?: list<string>|null,
     *     enableGuestFederation?: bool|null,
     *     globalFederation?: bool|null,
     *     federationMode?: int|null,
     *     enableRestrictedGlobalFederation?: bool|null,
     *     permittedWickrAwsNetworks?: list<WickrAwsNetworks>|null,
     *     permittedWickrEnterpriseNetworks?: list<PermittedWickrEnterpriseNetwork>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
