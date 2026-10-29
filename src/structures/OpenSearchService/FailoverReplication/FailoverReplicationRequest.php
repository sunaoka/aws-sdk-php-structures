<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\FailoverReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $PeerDomainArn
 * @property bool $AllowDataLoss
 */
class FailoverReplicationRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     PeerDomainArn: string,
     *     AllowDataLoss: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
