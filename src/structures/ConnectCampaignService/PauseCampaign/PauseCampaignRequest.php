<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PauseCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class PauseCampaignRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
