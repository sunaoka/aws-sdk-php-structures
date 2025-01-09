<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListProductSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CredentialsProvider $DomainCredentialsProvider
 * @property list<string> $DomainIpv4List
 * @property string $DomainName
 * @property DomainNetworkSettings $DomainNetworkSettings
 */
class ActiveDirectorySettings extends Shape
{
    /**
     * @param array{
     *     DomainCredentialsProvider?: CredentialsProvider,
     *     DomainIpv4List?: list<string>,
     *     DomainName?: string,
     *     DomainNetworkSettings?: DomainNetworkSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
