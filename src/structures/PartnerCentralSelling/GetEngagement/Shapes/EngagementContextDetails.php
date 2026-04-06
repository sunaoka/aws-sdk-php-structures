<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'CustomerProject'|'Lead' $Type
 * @property EngagementContextPayload|null $Payload
 */
class EngagementContextDetails extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type: 'CustomerProject'|'Lead',
     *     Payload?: EngagementContextPayload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
