<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Timezone
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null $WeekStart
 * @property 'ENABLED'|'DISABLED'|null $QBusinessInsightsStatus
 * @property list<string>|null $ExcludedDataSetArns
 */
class AssetOptions extends Shape
{
    /**
     * @param array{
     *     Timezone?: string|null,
     *     WeekStart?: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null,
     *     QBusinessInsightsStatus?: 'ENABLED'|'DISABLED'|null,
     *     ExcludedDataSetArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
