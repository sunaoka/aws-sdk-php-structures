<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RemoveReplicationPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $PeerDomainArn
 */
class RemoveReplicationPeerRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     PeerDomainArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
