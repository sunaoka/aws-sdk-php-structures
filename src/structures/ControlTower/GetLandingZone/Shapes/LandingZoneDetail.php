<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property list<'INHERITANCE_DRIFT'>|null $remediationTypes
 * @property string|null $arn
 * @property 'ACTIVE'|'PROCESSING'|'FAILED'|null $status
 * @property string|null $latestAvailableVersion
 * @property LandingZoneDriftStatusSummary|null $driftStatus
 * @property Manifest $manifest
 */
class LandingZoneDetail extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     remediationTypes?: list<'INHERITANCE_DRIFT'>|null,
     *     arn?: string|null,
     *     status?: 'ACTIVE'|'PROCESSING'|'FAILED'|null,
     *     latestAvailableVersion?: string|null,
     *     driftStatus?: LandingZoneDriftStatusSummary|null,
     *     manifest: Manifest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
