<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<Shapes\OutboundRequest> $outboundRequests
 */
class PutOutboundRequestBatchRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     outboundRequests: list<Shapes\OutboundRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
