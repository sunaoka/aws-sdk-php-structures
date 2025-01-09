<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCHEDULED'|'EXECUTING'|'PENDING_NEXT_RUN'|'COMPLETED'|'PAUSED'|'DELETED'|'INVALID' $CampaignStatus
 */
class CampaignState extends Shape
{
    /**
     * @param array{CampaignStatus?: 'SCHEDULED'|'EXECUTING'|'PENDING_NEXT_RUN'|'COMPLETED'|'PAUSED'|'DELETED'|'INVALID'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
