<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, Activity> $Activities
 * @property string $CreationDate
 * @property string $LastModifiedDate
 * @property JourneyLimits $Limits
 * @property bool $LocalTime
 * @property string $Name
 * @property QuietTime $QuietTime
 * @property string $RefreshFrequency
 * @property JourneySchedule $Schedule
 * @property string $StartActivity
 * @property StartCondition $StartCondition
 * @property 'DRAFT'|'ACTIVE'|'COMPLETED'|'CANCELLED'|'CLOSED'|'PAUSED' $State
 * @property bool $WaitForQuietTime
 * @property bool $RefreshOnSegmentUpdate
 * @property JourneyChannelSettings $JourneyChannelSettings
 * @property bool $SendingSchedule
 * @property OpenHours $OpenHours
 * @property ClosedDays $ClosedDays
 * @property list<'PHONE_NUMBER'|'POSTAL_CODE'> $TimezoneEstimationMethods
 */
class WriteJourneyRequest extends Shape
{
    /**
     * @param array{
     *     Activities?: array<string, Activity>,
     *     CreationDate?: string,
     *     LastModifiedDate?: string,
     *     Limits?: JourneyLimits,
     *     LocalTime?: bool,
     *     Name: string,
     *     QuietTime?: QuietTime,
     *     RefreshFrequency?: string,
     *     Schedule?: JourneySchedule,
     *     StartActivity?: string,
     *     StartCondition?: StartCondition,
     *     State?: 'DRAFT'|'ACTIVE'|'COMPLETED'|'CANCELLED'|'CLOSED'|'PAUSED',
     *     WaitForQuietTime?: bool,
     *     RefreshOnSegmentUpdate?: bool,
     *     JourneyChannelSettings?: JourneyChannelSettings,
     *     SendingSchedule?: bool,
     *     OpenHours?: OpenHours,
     *     ClosedDays?: ClosedDays,
     *     TimezoneEstimationMethods?: list<'PHONE_NUMBER'|'POSTAL_CODE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
