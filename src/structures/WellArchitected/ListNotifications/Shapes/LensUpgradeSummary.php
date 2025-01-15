<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkloadId
 * @property string|null $WorkloadName
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property string|null $CurrentLensVersion
 * @property string|null $LatestLensVersion
 * @property string|null $ResourceArn
 * @property string|null $ResourceName
 */
class LensUpgradeSummary extends Shape
{
    /**
     * @param array{
     *     WorkloadId?: string|null,
     *     WorkloadName?: string|null,
     *     LensAlias?: string|null,
     *     LensArn?: string|null,
     *     CurrentLensVersion?: string|null,
     *     LatestLensVersion?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
