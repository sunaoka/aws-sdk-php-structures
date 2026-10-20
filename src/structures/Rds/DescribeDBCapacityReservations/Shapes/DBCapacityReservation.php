<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBCapacityReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBCapacityReservationName
 * @property string|null $DBInstanceClass
 * @property string|null $Engine
 * @property string|null $LicenseModel
 * @property int|null $ReservedCapacityPerAvailabilityZone
 * @property list<AvailableCapacityPerAvailabilityZone>|null $AvailableCapacityPerAvailabilityZoneList
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property DBCapacityReservationCommitmentInfo|null $CommitmentInfo
 * @property 'active'|'expired'|'cancelled'|'pending'|'failed'|'assessing'|'scheduled'|'delayed'|'unsupported'|null $State
 * @property string|null $DBCapacityReservationArn
 * @property string|null $DBCapacityReservationIdentifier
 * @property list<Tag>|null $TagList
 */
class DBCapacityReservation extends Shape
{
    /**
     * @param array{
     *     DBCapacityReservationName?: string|null,
     *     DBInstanceClass?: string|null,
     *     Engine?: string|null,
     *     LicenseModel?: string|null,
     *     ReservedCapacityPerAvailabilityZone?: int|null,
     *     AvailableCapacityPerAvailabilityZoneList?: list<AvailableCapacityPerAvailabilityZone>|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     CommitmentInfo?: DBCapacityReservationCommitmentInfo|null,
     *     State?: 'active'|'expired'|'cancelled'|'pending'|'failed'|'assessing'|'scheduled'|'delayed'|'unsupported'|null,
     *     DBCapacityReservationArn?: string|null,
     *     DBCapacityReservationIdentifier?: string|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
