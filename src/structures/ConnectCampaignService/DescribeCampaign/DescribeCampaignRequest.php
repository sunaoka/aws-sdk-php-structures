<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DescribeCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DescribeCampaignRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
