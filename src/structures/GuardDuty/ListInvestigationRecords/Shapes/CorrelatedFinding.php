<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property int<0, max>|null $Count
 * @property double|null $SeverityMax
 * @property list<'HIGH_SEVERITY'|'SAME_RESOURCE'|'SAME_BEHAVIOR'>|null $CorrelationReasons
 * @property list<string>|null $FindingIds
 * @property list<SharedResource>|null $SharedResources
 * @property list<SharedBehavior>|null $SharedBehaviors
 */
class CorrelatedFinding extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     Count?: int<0, max>|null,
     *     SeverityMax?: double|null,
     *     CorrelationReasons?: list<'HIGH_SEVERITY'|'SAME_RESOURCE'|'SAME_BEHAVIOR'>|null,
     *     FindingIds?: list<string>|null,
     *     SharedResources?: list<SharedResource>|null,
     *     SharedBehaviors?: list<SharedBehavior>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
