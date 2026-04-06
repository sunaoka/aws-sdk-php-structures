<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateTrust;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $RemoteDomainName
 * @property string $TrustPassword
 * @property 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way' $TrustDirection
 * @property 'Forest'|'External'|null $TrustType
 * @property list<string>|null $ConditionalForwarderIpAddrs
 * @property list<string>|null $ConditionalForwarderIpv6Addrs
 * @property 'Enabled'|'Disabled'|null $SelectiveAuth
 */
class CreateTrustRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RemoteDomainName: string,
     *     TrustPassword: string,
     *     TrustDirection: 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way',
     *     TrustType?: 'Forest'|'External'|null,
     *     ConditionalForwarderIpAddrs?: list<string>|null,
     *     ConditionalForwarderIpv6Addrs?: list<string>|null,
     *     SelectiveAuth?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
