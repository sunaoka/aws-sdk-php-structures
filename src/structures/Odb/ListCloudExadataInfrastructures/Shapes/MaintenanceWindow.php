<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudExadataInfrastructures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<15, 120>|null $customActionTimeoutInMins
 * @property list<DayOfWeek>|null $daysOfWeek
 * @property list<int>|null $hoursOfDay
 * @property bool|null $isCustomActionTimeoutEnabled
 * @property int<1, 4>|null $leadTimeInWeeks
 * @property list<Month>|null $months
 * @property 'ROLLING'|'NONROLLING'|null $patchingMode
 * @property 'NO_PREFERENCE'|'CUSTOM_PREFERENCE'|null $preference
 * @property bool|null $skipRu
 * @property list<int>|null $weeksOfMonth
 */
class MaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     customActionTimeoutInMins?: int<15, 120>|null,
     *     daysOfWeek?: list<DayOfWeek>|null,
     *     hoursOfDay?: list<int>|null,
     *     isCustomActionTimeoutEnabled?: bool|null,
     *     leadTimeInWeeks?: int<1, 4>|null,
     *     months?: list<Month>|null,
     *     patchingMode?: 'ROLLING'|'NONROLLING'|null,
     *     preference?: 'NO_PREFERENCE'|'CUSTOM_PREFERENCE'|null,
     *     skipRu?: bool|null,
     *     weeksOfMonth?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
