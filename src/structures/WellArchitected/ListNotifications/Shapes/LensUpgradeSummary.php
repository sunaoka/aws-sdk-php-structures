<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkloadId
 * @property string $WorkloadName
 * @property string $LensAlias
 * @property string $LensArn
 * @property string $CurrentLensVersion
 * @property string $LatestLensVersion
 * @property string $ResourceArn
 * @property string $ResourceName
 */
class LensUpgradeSummary extends Shape
{
    /**
     * @param array{
     *     WorkloadId?: string,
     *     WorkloadName?: string,
     *     LensAlias?: string,
     *     LensArn?: string,
     *     CurrentLensVersion?: string,
     *     LatestLensVersion?: string,
     *     ResourceArn?: string,
     *     ResourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
