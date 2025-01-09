<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CommunicationLimit> $communicationLimitsList
 */
class CommunicationLimits extends Shape
{
    /**
     * @param array{communicationLimitsList?: list<CommunicationLimit>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
