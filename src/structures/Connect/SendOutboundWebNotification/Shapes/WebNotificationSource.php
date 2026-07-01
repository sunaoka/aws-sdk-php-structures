<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundWebNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceCampaign $SourceCampaign
 */
class WebNotificationSource extends Shape
{
    /**
     * @param array{SourceCampaign: SourceCampaign} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
