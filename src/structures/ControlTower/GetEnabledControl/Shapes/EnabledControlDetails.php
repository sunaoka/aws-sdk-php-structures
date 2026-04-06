<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $controlIdentifier
 * @property string|null $targetIdentifier
 * @property EnablementStatusSummary|null $statusSummary
 * @property DriftStatusSummary|null $driftStatusSummary
 * @property string|null $parentIdentifier
 * @property list<Region>|null $targetRegions
 * @property list<EnabledControlParameterSummary>|null $parameters
 */
class EnabledControlDetails extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     controlIdentifier?: string|null,
     *     targetIdentifier?: string|null,
     *     statusSummary?: EnablementStatusSummary|null,
     *     driftStatusSummary?: DriftStatusSummary|null,
     *     parentIdentifier?: string|null,
     *     targetRegions?: list<Region>|null,
     *     parameters?: list<EnabledControlParameterSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
