<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property LandingZoneDriftStatusSummary|null $driftStatus
 * @property string|null $latestAvailableVersion
 * @property Manifest $manifest
 * @property 'ACTIVE'|'PROCESSING'|'FAILED'|null $status
 * @property string $version
 */
class LandingZoneDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     driftStatus?: LandingZoneDriftStatusSummary|null,
     *     latestAvailableVersion?: string|null,
     *     manifest: Manifest,
     *     status?: 'ACTIVE'|'PROCESSING'|'FAILED'|null,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
