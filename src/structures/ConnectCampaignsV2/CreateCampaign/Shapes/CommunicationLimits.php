<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CommunicationLimit>|null $communicationLimitsList
 */
class CommunicationLimits extends Shape
{
    /**
     * @param array{communicationLimitsList?: list<CommunicationLimit>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
