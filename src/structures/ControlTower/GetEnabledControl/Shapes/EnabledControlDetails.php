<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $controlIdentifier
 * @property DriftStatusSummary|null $driftStatusSummary
 * @property list<EnabledControlParameterSummary>|null $parameters
 * @property EnablementStatusSummary|null $statusSummary
 * @property string|null $targetIdentifier
 * @property list<Region>|null $targetRegions
 */
class EnabledControlDetails extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     controlIdentifier?: string|null,
     *     driftStatusSummary?: DriftStatusSummary|null,
     *     parameters?: list<EnabledControlParameterSummary>|null,
     *     statusSummary?: EnablementStatusSummary|null,
     *     targetIdentifier?: string|null,
     *     targetRegions?: list<Region>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
