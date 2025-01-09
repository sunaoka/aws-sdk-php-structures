<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 */
class GetCampaignRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
