<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null $EnhancedMonitoring
 */
class MskMonitoringParameters extends Shape
{
    /**
     * @param array{EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
