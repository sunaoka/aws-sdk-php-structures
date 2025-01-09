<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\CommunicationLimitsConfig $communicationLimitsOverride
 */
class UpdateCampaignCommunicationLimitsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     communicationLimitsOverride: Shapes\CommunicationLimitsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
