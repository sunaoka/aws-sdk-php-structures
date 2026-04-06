<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignFlowAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $connectCampaignFlowArn
 */
class UpdateCampaignFlowAssociationRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     connectCampaignFlowArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
