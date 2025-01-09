<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 */
class DescribeCampaignRequest extends Request
{
    /**
     * @param array{campaignArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
