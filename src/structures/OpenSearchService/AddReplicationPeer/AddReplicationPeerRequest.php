<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddReplicationPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $PeerDomainArn
 * @property bool|null $DryRun
 */
class AddReplicationPeerRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     PeerDomainArn: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
