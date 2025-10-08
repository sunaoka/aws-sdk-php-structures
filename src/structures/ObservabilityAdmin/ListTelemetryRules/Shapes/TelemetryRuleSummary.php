<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleName
 * @property string|null $RuleArn
 * @property int|null $CreatedTimeStamp
 * @property int|null $LastUpdateTimeStamp
 * @property 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|null $ResourceType
 * @property 'Logs'|'Metrics'|'Traces'|null $TelemetryType
 */
class TelemetryRuleSummary extends Shape
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     RuleArn?: string|null,
     *     CreatedTimeStamp?: int|null,
     *     LastUpdateTimeStamp?: int|null,
     *     ResourceType?: 'AWS::EC2::Instance'|'AWS::EC2::VPC'|'AWS::Lambda::Function'|null,
     *     TelemetryType?: 'Logs'|'Metrics'|'Traces'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
