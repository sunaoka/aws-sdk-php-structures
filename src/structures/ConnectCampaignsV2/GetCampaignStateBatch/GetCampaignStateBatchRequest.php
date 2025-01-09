<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetCampaignStateBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $campaignIds
 */
class GetCampaignStateBatchRequest extends Request
{
    /**
     * @param array{campaignIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
