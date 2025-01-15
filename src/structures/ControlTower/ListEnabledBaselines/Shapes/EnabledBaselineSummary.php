<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $baselineIdentifier
 * @property string|null $baselineVersion
 * @property string|null $parentIdentifier
 * @property EnablementStatusSummary $statusSummary
 * @property string $targetIdentifier
 */
class EnabledBaselineSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     baselineIdentifier: string,
     *     baselineVersion?: string|null,
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
