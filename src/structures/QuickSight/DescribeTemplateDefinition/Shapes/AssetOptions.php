<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Timezone
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null $WeekStart
 * @property 'ENABLED'|'DISABLED'|null $QBusinessInsightsStatus
 * @property list<string>|null $ExcludedDataSetArns
 * @property VisualCustomActionDefaults|null $CustomActionDefaults
 */
class AssetOptions extends Shape
{
    /**
     * @param array{
     *     Timezone?: string|null,
     *     WeekStart?: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null,
     *     QBusinessInsightsStatus?: 'ENABLED'|'DISABLED'|null,
     *     ExcludedDataSetArns?: list<string>|null,
     *     CustomActionDefaults?: VisualCustomActionDefaults|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
