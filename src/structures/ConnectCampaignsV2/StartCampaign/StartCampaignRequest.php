<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\StartCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StartCampaignRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
