<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCHEDULED'|'EXECUTING'|'PENDING_NEXT_RUN'|'COMPLETED'|'PAUSED'|'DELETED'|'INVALID'|null $CampaignStatus
 */
class CampaignState extends Shape
{
    /**
     * @param array{CampaignStatus?: 'SCHEDULED'|'EXECUTING'|'PENDING_NEXT_RUN'|'COMPLETED'|'PAUSED'|'DELETED'|'INVALID'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
