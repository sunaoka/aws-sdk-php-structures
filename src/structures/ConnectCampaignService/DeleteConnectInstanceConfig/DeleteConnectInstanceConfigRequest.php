<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DeleteConnectInstanceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 */
class DeleteConnectInstanceConfigRequest extends Request
{
    /**
     * @param array{connectInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
