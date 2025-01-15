<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, Activity>|null $Activities
 * @property string $ApplicationId
 * @property string|null $CreationDate
 * @property string $Id
 * @property string|null $LastModifiedDate
 * @property JourneyLimits|null $Limits
 * @property bool|null $LocalTime
 * @property string $Name
 * @property QuietTime|null $QuietTime
 * @property string|null $RefreshFrequency
 * @property JourneySchedule|null $Schedule
 * @property string|null $StartActivity
 * @property StartCondition|null $StartCondition
 * @property 'DRAFT'|'ACTIVE'|'COMPLETED'|'CANCELLED'|'CLOSED'|'PAUSED'|null $State
 * @property array<string, string>|null $tags
 * @property bool|null $WaitForQuietTime
 * @property bool|null $RefreshOnSegmentUpdate
 * @property JourneyChannelSettings|null $JourneyChannelSettings
 * @property bool|null $SendingSchedule
 * @property OpenHours|null $OpenHours
 * @property ClosedDays|null $ClosedDays
 * @property list<'PHONE_NUMBER'|'POSTAL_CODE'>|null $TimezoneEstimationMethods
 */
class JourneyResponse extends Shape
{
    /**
     * @param array{
     *     Activities?: array<string, Activity>|null,
     *     ApplicationId: string,
     *     CreationDate?: string|null,
     *     Id: string,
     *     LastModifiedDate?: string|null,
     *     Limits?: JourneyLimits|null,
     *     LocalTime?: bool|null,
     *     Name: string,
     *     QuietTime?: QuietTime|null,
     *     RefreshFrequency?: string|null,
     *     Schedule?: JourneySchedule|null,
     *     StartActivity?: string|null,
     *     StartCondition?: StartCondition|null,
     *     State?: 'DRAFT'|'ACTIVE'|'COMPLETED'|'CANCELLED'|'CLOSED'|'PAUSED'|null,
     *     tags?: array<string, string>|null,
     *     WaitForQuietTime?: bool|null,
     *     RefreshOnSegmentUpdate?: bool|null,
     *     JourneyChannelSettings?: JourneyChannelSettings|null,
     *     SendingSchedule?: bool|null,
     *     OpenHours?: OpenHours|null,
     *     ClosedDays?: ClosedDays|null,
     *     TimezoneEstimationMethods?: list<'PHONE_NUMBER'|'POSTAL_CODE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
