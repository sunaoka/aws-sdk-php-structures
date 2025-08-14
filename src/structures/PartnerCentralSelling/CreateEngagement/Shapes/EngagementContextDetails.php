<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CustomerProject' $Type
 * @property EngagementContextPayload|null $Payload
 */
class EngagementContextDetails extends Shape
{
    /**
     * @param array{
     *     Type: 'CustomerProject',
     *     Payload?: EngagementContextPayload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
