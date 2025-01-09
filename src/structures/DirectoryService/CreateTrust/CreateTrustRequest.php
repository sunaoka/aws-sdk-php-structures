<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateTrust;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $RemoteDomainName
 * @property string $TrustPassword
 * @property 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way' $TrustDirection
 * @property 'Forest'|'External' $TrustType
 * @property list<string> $ConditionalForwarderIpAddrs
 * @property 'Enabled'|'Disabled' $SelectiveAuth
 */
class CreateTrustRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RemoteDomainName: string,
     *     TrustPassword: string,
     *     TrustDirection: 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way',
     *     TrustType?: 'Forest'|'External',
     *     ConditionalForwarderIpAddrs?: list<string>,
     *     SelectiveAuth?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
