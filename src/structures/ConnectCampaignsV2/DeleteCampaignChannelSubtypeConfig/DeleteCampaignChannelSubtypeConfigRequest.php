<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignChannelSubtypeConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'TELEPHONY'|'SMS'|'EMAIL'|'WHATSAPP' $channelSubtype
 */
class DeleteCampaignChannelSubtypeConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     channelSubtype: 'TELEPHONY'|'SMS'|'EMAIL'|'WHATSAPP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
