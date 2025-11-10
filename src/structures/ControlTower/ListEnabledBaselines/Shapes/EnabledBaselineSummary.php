<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $baselineIdentifier
 * @property string|null $baselineVersion
 * @property EnabledBaselineDriftStatusSummary|null $driftStatusSummary
 * @property string $targetIdentifier
 * @property string|null $parentIdentifier
 * @property EnablementStatusSummary $statusSummary
 */
class EnabledBaselineSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     baselineIdentifier: string,
     *     baselineVersion?: string|null,
     *     driftStatusSummary?: EnabledBaselineDriftStatusSummary|null,
     *     targetIdentifier: string,
     *     parentIdentifier?: string|null,
     *     statusSummary: EnablementStatusSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
