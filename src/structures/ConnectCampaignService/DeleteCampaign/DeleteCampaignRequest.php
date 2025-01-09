<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DeleteCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteCampaignRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
