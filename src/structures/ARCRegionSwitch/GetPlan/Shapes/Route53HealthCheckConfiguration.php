<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property string $hostedZoneId
 * @property string $recordName
 * @property list<Route53ResourceRecordSet>|null $recordSets
 */
class Route53HealthCheckConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     hostedZoneId: string,
     *     recordName: string,
     *     recordSets?: list<Route53ResourceRecordSet>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
