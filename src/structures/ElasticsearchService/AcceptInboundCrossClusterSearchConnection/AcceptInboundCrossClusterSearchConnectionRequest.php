<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\AcceptInboundCrossClusterSearchConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrossClusterSearchConnectionId
 */
class AcceptInboundCrossClusterSearchConnectionRequest extends Request
{
    /**
     * @param array{CrossClusterSearchConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
