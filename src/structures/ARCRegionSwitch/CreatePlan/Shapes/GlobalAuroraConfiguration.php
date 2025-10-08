<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CreatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property 'switchoverOnly'|'failover' $behavior
 * @property GlobalAuroraUngraceful|null $ungraceful
 * @property string $globalClusterIdentifier
 * @property list<string> $databaseClusterArns
 */
class GlobalAuroraConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     behavior: 'switchoverOnly'|'failover',
     *     ungraceful?: GlobalAuroraUngraceful|null,
     *     globalClusterIdentifier: string,
     *     databaseClusterArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
