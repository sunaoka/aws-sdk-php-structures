<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, Activity> $Activities
 * @property string $ApplicationId
 * @property string $CreationDate
 * @property string $Id
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
 * @property array<string, string> $tags
 * @property bool $WaitForQuietTime
 * @property bool $RefreshOnSegmentUpdate
 * @property JourneyChannelSettings $JourneyChannelSettings
 * @property bool $SendingSchedule
 * @property OpenHours $OpenHours
 * @property ClosedDays $ClosedDays
 * @property list<'PHONE_NUMBER'|'POSTAL_CODE'> $TimezoneEstimationMethods
 */
class JourneyResponse extends Shape
{
    /**
     * @param array{
     *     Activities?: array<string, Activity>,
     *     ApplicationId: string,
     *     CreationDate?: string,
     *     Id: string,
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
     *     tags?: array<string, string>,
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
