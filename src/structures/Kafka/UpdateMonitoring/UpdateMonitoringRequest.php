<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateMonitoring;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION' $EnhancedMonitoring
 * @property Shapes\OpenMonitoringInfo $OpenMonitoring
 * @property Shapes\LoggingInfo $LoggingInfo
 */
class UpdateMonitoringRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION',
     *     OpenMonitoring?: Shapes\OpenMonitoringInfo,
     *     LoggingInfo?: Shapes\LoggingInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
