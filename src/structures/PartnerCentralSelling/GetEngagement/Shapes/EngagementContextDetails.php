<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EngagementContextPayload|null $Payload
 * @property 'CustomerProject' $Type
 */
class EngagementContextDetails extends Shape
{
    /**
     * @param array{
     *     Payload?: EngagementContextPayload|null,
     *     Type: 'CustomerProject'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
