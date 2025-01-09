<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteInboundCrossClusterSearchConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrossClusterSearchConnectionId
 */
class DeleteInboundCrossClusterSearchConnectionRequest extends Request
{
    /**
     * @param array{CrossClusterSearchConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
