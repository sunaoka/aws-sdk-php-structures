<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetConnectInstanceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 */
class GetConnectInstanceConfigRequest extends Request
{
    /**
     * @param array{connectInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
