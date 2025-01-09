<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\CommunicationTimeConfig $communicationTimeConfig
 */
class UpdateCampaignCommunicationTimeRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     communicationTimeConfig: Shapes\CommunicationTimeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
