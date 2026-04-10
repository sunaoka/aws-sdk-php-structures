<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $Status
 * @property string|null $FailureReason
 * @property string|null $RuleArn
 */
class RegionStatus extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     Status?: string|null,
     *     FailureReason?: string|null,
     *     RuleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
