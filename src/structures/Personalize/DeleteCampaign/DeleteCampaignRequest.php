<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 */
class DeleteCampaignRequest extends Request
{
    /**
     * @param array{campaignArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
