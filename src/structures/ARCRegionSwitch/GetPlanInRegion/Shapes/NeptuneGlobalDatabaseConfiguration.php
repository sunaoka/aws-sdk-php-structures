<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property 'switchoverOnly'|'failover' $behavior
 * @property NeptuneUngraceful|null $ungraceful
 * @property string $globalClusterIdentifier
 * @property array<string, string> $regionDatabaseClusterArns
 */
class NeptuneGlobalDatabaseConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     behavior: 'switchoverOnly'|'failover',
     *     ungraceful?: NeptuneUngraceful|null,
     *     globalClusterIdentifier: string,
     *     regionDatabaseClusterArns: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
