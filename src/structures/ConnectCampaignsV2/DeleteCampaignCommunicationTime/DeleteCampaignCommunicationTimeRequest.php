<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignCommunicationTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'TELEPHONY'|'SMS'|'EMAIL'|'WHATSAPP' $config
 */
class DeleteCampaignCommunicationTimeRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     config: 'TELEPHONY'|'SMS'|'EMAIL'|'WHATSAPP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
