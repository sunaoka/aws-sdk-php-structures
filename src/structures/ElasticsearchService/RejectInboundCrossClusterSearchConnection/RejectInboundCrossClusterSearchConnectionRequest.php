<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\RejectInboundCrossClusterSearchConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrossClusterSearchConnectionId
 */
class RejectInboundCrossClusterSearchConnectionRequest extends Request
{
    /**
     * @param array{CrossClusterSearchConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
