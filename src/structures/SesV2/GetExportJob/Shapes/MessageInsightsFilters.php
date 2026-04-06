<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $FromEmailAddress
 * @property list<string>|null $Destination
 * @property list<string>|null $Subject
 * @property list<string>|null $Isp
 * @property list<'SEND'|'DELIVERY'|'TRANSIENT_BOUNCE'|'PERMANENT_BOUNCE'|'UNDETERMINED_BOUNCE'|'COMPLAINT'>|null $LastDeliveryEvent
 * @property list<'OPEN'|'CLICK'>|null $LastEngagementEvent
 */
class MessageInsightsFilters extends Shape
{
    /**
     * @param array{
     *     FromEmailAddress?: list<string>|null,
     *     Destination?: list<string>|null,
     *     Subject?: list<string>|null,
     *     Isp?: list<string>|null,
     *     LastDeliveryEvent?: list<'SEND'|'DELIVERY'|'TRANSIENT_BOUNCE'|'PERMANENT_BOUNCE'|'UNDETERMINED_BOUNCE'|'COMPLAINT'>|null,
     *     LastEngagementEvent?: list<'OPEN'|'CLICK'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
