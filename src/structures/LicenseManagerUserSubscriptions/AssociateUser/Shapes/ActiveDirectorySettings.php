<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property list<string>|null $DomainIpv4List
 * @property list<string>|null $DomainIpv6List
 * @property CredentialsProvider|null $DomainCredentialsProvider
 * @property DomainNetworkSettings|null $DomainNetworkSettings
 */
class ActiveDirectorySettings extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     DomainIpv4List?: list<string>|null,
     *     DomainIpv6List?: list<string>|null,
     *     DomainCredentialsProvider?: CredentialsProvider|null,
     *     DomainNetworkSettings?: DomainNetworkSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
