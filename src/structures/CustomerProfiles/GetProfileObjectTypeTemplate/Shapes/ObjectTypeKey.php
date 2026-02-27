<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectTypeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PROFILE'|'ASSET'|'CASE'|'DEVICE'|'WEB_ANALYTICS'|'ORDER'|'COMMUNICATION_RECORD'|'AIR_PREFERENCE'|'HOTEL_PREFERENCE'|'AIR_BOOKING'|'AIR_SEGMENT'|'HOTEL_RESERVATION'|'HOTEL_STAY_REVENUE'|'LOYALTY'|'LOYALTY_TRANSACTION'|'LOYALTY_PROMOTION'|'UNIQUE'|'SECONDARY'|'LOOKUP_ONLY'|'NEW_ONLY'>|null $StandardIdentifiers
 * @property list<string>|null $FieldNames
 */
class ObjectTypeKey extends Shape
{
    /**
     * @param array{
     *     StandardIdentifiers?: list<'PROFILE'|'ASSET'|'CASE'|'DEVICE'|'WEB_ANALYTICS'|'ORDER'|'COMMUNICATION_RECORD'|'AIR_PREFERENCE'|'HOTEL_PREFERENCE'|'AIR_BOOKING'|'AIR_SEGMENT'|'HOTEL_RESERVATION'|'HOTEL_STAY_REVENUE'|'LOYALTY'|'LOYALTY_TRANSACTION'|'LOYALTY_PROMOTION'|'UNIQUE'|'SECONDARY'|'LOOKUP_ONLY'|'NEW_ONLY'>|null,
     *     FieldNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
