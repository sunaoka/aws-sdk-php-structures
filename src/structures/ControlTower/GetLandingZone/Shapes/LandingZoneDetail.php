<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property LandingZoneDriftStatusSummary $driftStatus
 * @property string $latestAvailableVersion
 * @property Manifest $manifest
 * @property 'ACTIVE'|'PROCESSING'|'FAILED' $status
 * @property string $version
 */
class LandingZoneDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     driftStatus?: LandingZoneDriftStatusSummary,
     *     latestAvailableVersion?: string,
     *     manifest: Manifest,
     *     status?: 'ACTIVE'|'PROCESSING'|'FAILED',
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
