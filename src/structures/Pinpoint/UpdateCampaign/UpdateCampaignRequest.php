<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property Shapes\WriteCampaignRequest $WriteCampaignRequest
 */
class UpdateCampaignRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
     *     WriteCampaignRequest: Shapes\WriteCampaignRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
