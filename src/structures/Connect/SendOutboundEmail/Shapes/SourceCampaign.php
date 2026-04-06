<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CampaignId
 * @property string|null $OutboundRequestId
 */
class SourceCampaign extends Shape
{
    /**
     * @param array{
     *     CampaignId?: string|null,
     *     OutboundRequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
