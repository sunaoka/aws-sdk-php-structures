<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignCommunicationLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'ALL_CHANNEL_SUBTYPES' $config
 */
class DeleteCampaignCommunicationLimitsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     config: 'ALL_CHANNEL_SUBTYPES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
