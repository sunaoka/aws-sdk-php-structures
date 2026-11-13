<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property int<0, max>|null $Count
 * @property double|null $Percentage
 * @property string|null $DominantSeverity
 */
class TypeDistribution extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     Count?: int<0, max>|null,
     *     Percentage?: double|null,
     *     DominantSeverity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
