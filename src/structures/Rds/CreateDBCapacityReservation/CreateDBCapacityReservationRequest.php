<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBCapacityReservationName
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property int $CapacityPerAvailabilityZone
 * @property list<string> $AvailabilityZones
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property int|null $CommitmentDuration
 * @property string|null $LicenseModel
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     DBCapacityReservationName: string,
     *     DBInstanceClass: string,
     *     Engine: string,
     *     CapacityPerAvailabilityZone: int,
     *     AvailabilityZones: list<string>,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     CommitmentDuration?: int|null,
     *     LicenseModel?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
