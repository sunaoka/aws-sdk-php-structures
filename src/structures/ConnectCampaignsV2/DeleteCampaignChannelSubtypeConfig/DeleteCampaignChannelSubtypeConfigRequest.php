<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignChannelSubtypeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'TELEPHONY'|'SMS'|'EMAIL' $channelSubtype
 */
class DeleteCampaignChannelSubtypeConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     channelSubtype: 'TELEPHONY'|'SMS'|'EMAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
