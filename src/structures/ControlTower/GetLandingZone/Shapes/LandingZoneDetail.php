<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property Manifest $manifest
 * @property list<'INHERITANCE_DRIFT'>|null $remediationTypes
 * @property string|null $arn
 * @property 'ACTIVE'|'PROCESSING'|'FAILED'|null $status
 * @property string|null $latestAvailableVersion
 * @property LandingZoneDriftStatusSummary|null $driftStatus
 */
class LandingZoneDetail extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     manifest: Manifest,
     *     remediationTypes?: list<'INHERITANCE_DRIFT'>|null,
     *     arn?: string|null,
     *     status?: 'ACTIVE'|'PROCESSING'|'FAILED'|null,
     *     latestAvailableVersion?: string|null,
     *     driftStatus?: LandingZoneDriftStatusSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
