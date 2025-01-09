<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteOutboundCrossClusterSearchConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrossClusterSearchConnectionId
 */
class DeleteOutboundCrossClusterSearchConnectionRequest extends Request
{
    /**
     * @param array{CrossClusterSearchConnectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
