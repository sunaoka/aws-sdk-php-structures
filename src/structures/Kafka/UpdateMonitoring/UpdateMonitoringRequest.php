<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateMonitoring;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null $EnhancedMonitoring
 * @property Shapes\OpenMonitoringInfo|null $OpenMonitoring
 * @property Shapes\LoggingInfo|null $LoggingInfo
 */
class UpdateMonitoringRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null,
     *     OpenMonitoring?: Shapes\OpenMonitoringInfo|null,
     *     LoggingInfo?: Shapes\LoggingInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
