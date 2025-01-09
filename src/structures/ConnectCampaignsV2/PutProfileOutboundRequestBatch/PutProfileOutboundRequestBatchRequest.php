<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<Shapes\ProfileOutboundRequest> $profileOutboundRequests
 */
class PutProfileOutboundRequestBatchRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     profileOutboundRequests: list<Shapes\ProfileOutboundRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
