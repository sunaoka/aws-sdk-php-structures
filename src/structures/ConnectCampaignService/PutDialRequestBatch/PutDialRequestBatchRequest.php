<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<Shapes\DialRequest> $dialRequests
 */
class PutDialRequestBatchRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     dialRequests: list<Shapes\DialRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
