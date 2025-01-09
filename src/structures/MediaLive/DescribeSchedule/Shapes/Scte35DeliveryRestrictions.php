<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARCHIVE_NOT_ALLOWED'|'ARCHIVE_ALLOWED' $ArchiveAllowedFlag
 * @property 'NONE'|'RESTRICT_GROUP0'|'RESTRICT_GROUP1'|'RESTRICT_GROUP2' $DeviceRestrictions
 * @property 'REGIONAL_BLACKOUT'|'NO_REGIONAL_BLACKOUT' $NoRegionalBlackoutFlag
 * @property 'WEB_DELIVERY_NOT_ALLOWED'|'WEB_DELIVERY_ALLOWED' $WebDeliveryAllowedFlag
 */
class Scte35DeliveryRestrictions extends Shape
{
    /**
     * @param array{
     *     ArchiveAllowedFlag: 'ARCHIVE_NOT_ALLOWED'|'ARCHIVE_ALLOWED',
     *     DeviceRestrictions: 'NONE'|'RESTRICT_GROUP0'|'RESTRICT_GROUP1'|'RESTRICT_GROUP2',
     *     NoRegionalBlackoutFlag: 'REGIONAL_BLACKOUT'|'NO_REGIONAL_BLACKOUT',
     *     WebDeliveryAllowedFlag: 'WEB_DELIVERY_NOT_ALLOWED'|'WEB_DELIVERY_ALLOWED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
