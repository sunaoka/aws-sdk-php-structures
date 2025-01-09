<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CampaignId
 * @property string $OutboundRequestId
 */
class SourceCampaign extends Shape
{
    /**
     * @param array{
     *     CampaignId?: string,
     *     OutboundRequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
