<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $baselineIdentifier
 * @property string $baselineVersion
 * @property list<EnabledBaselineParameterSummary> $parameters
 * @property string $parentIdentifier
 * @property EnablementStatusSummary $statusSummary
 * @property string $targetIdentifier
 */
class EnabledBaselineDetails extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     baselineIdentifier: string,
     *     baselineVersion?: string,
     *     parameters?: list<EnabledBaselineParameterSummary>,
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
