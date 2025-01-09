<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetCampaignStateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
