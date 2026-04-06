<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CredentialsProvider|null $DomainCredentialsProvider
 * @property list<string>|null $DomainIpv4List
 * @property string|null $DomainName
 * @property DomainNetworkSettings|null $DomainNetworkSettings
 */
class ActiveDirectorySettings extends Shape
{
    /**
     * @param array{
     *     DomainCredentialsProvider?: CredentialsProvider|null,
     *     DomainIpv4List?: list<string>|null,
     *     DomainName?: string|null,
     *     DomainNetworkSettings?: DomainNetworkSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
