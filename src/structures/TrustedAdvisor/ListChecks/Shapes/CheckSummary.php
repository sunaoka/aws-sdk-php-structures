<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<string> $awsServices
 * @property string $description
 * @property string $id
 * @property array<string, string> $metadata
 * @property string $name
 * @property list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'> $pillars
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected' $source
 */
class CheckSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     awsServices: list<string>,
     *     description: string,
     *     id: string,
     *     metadata: array<string, string>,
     *     name: string,
     *     pillars: list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'>,
     *     source: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
