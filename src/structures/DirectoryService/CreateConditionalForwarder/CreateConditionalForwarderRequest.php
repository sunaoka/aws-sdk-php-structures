<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateConditionalForwarder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $RemoteDomainName
 * @property list<string> $DnsIpAddrs
 */
class CreateConditionalForwarderRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RemoteDomainName: string,
     *     DnsIpAddrs: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
