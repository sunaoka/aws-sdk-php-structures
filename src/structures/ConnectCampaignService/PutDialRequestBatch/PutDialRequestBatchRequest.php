<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DialRequest> $dialRequests
 * @property string $id
 */
class PutDialRequestBatchRequest extends Request
{
    /**
     * @param array{
     *     dialRequests: list<Shapes\DialRequest>,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
