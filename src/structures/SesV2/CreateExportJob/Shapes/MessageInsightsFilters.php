<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $FromEmailAddress
 * @property list<string> $Destination
 * @property list<string> $Subject
 * @property list<string> $Isp
 * @property list<'SEND'|'DELIVERY'|'TRANSIENT_BOUNCE'|'PERMANENT_BOUNCE'|'UNDETERMINED_BOUNCE'|'COMPLAINT'> $LastDeliveryEvent
 * @property list<'OPEN'|'CLICK'> $LastEngagementEvent
 */
class MessageInsightsFilters extends Shape
{
    /**
     * @param array{
     *     FromEmailAddress?: list<string>,
     *     Destination?: list<string>,
     *     Subject?: list<string>,
     *     Isp?: list<string>,
     *     LastDeliveryEvent?: list<'SEND'|'DELIVERY'|'TRANSIENT_BOUNCE'|'PERMANENT_BOUNCE'|'UNDETERMINED_BOUNCE'|'COMPLAINT'>,
     *     LastEngagementEvent?: list<'OPEN'|'CLICK'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
