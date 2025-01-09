<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $baselineIdentifier
 * @property string $baselineVersion
 * @property string $parentIdentifier
 * @property EnablementStatusSummary $statusSummary
 * @property string $targetIdentifier
 */
class EnabledBaselineSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     baselineIdentifier: string,
     *     baselineVersion?: string,
     *     parentIdentifier?: string,
     *     statusSummary: EnablementStatusSummary,
     *     targetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
