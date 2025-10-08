<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutInstanceCommunicationLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property Shapes\InstanceCommunicationLimitsConfig $communicationLimitsConfig
 */
class PutInstanceCommunicationLimitsRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     communicationLimitsConfig: Shapes\InstanceCommunicationLimitsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
