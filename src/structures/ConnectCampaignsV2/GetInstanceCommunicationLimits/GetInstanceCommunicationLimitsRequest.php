<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetInstanceCommunicationLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 */
class GetInstanceCommunicationLimitsRequest extends Request
{
    /**
     * @param array{connectInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
