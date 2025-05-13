<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $baselineIdentifier
 * @property string|null $baselineVersion
 * @property EnabledBaselineDriftStatusSummary|null $driftStatusSummary
 * @property list<EnabledBaselineParameterSummary>|null $parameters
 * @property string|null $parentIdentifier
 * @property EnablementStatusSummary $statusSummary
 * @property string $targetIdentifier
 */
class EnabledBaselineDetails extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     baselineIdentifier: string,
     *     baselineVersion?: string|null,
     *     driftStatusSummary?: EnabledBaselineDriftStatusSummary|null,
     *     parameters?: list<EnabledBaselineParameterSummary>|null,
     *     parentIdentifier?: string|null,
     *     statusSummary: EnablementStatusSummary,
     *     targetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
