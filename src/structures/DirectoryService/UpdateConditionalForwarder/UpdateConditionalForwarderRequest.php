<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateConditionalForwarder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $RemoteDomainName
 * @property list<string>|null $DnsIpAddrs
 * @property list<string>|null $DnsIpv6Addrs
 */
class UpdateConditionalForwarderRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RemoteDomainName: string,
     *     DnsIpAddrs?: list<string>|null,
     *     DnsIpv6Addrs?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
