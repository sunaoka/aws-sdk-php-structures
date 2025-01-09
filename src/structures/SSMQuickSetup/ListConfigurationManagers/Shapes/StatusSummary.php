<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'INITIALIZING'|'DEPLOYING'|'SUCCEEDED'|'DELETING'|'STOPPING'|'FAILED'|'STOPPED'|'DELETE_FAILED'|'STOP_FAILED'|'NONE' $Status
 * @property array<string, string> $StatusDetails
 * @property string $StatusMessage
 * @property 'Deployment'|'AsyncExecutions' $StatusType
 */
class StatusSummary extends Shape
{
    /**
     * @param array{
     *     LastUpdatedAt: \Aws\Api\DateTimeResult,
     *     Status?: 'INITIALIZING'|'DEPLOYING'|'SUCCEEDED'|'DELETING'|'STOPPING'|'FAILED'|'STOPPED'|'DELETE_FAILED'|'STOP_FAILED'|'NONE',
     *     StatusDetails?: array<string, string>,
     *     StatusMessage?: string,
     *     StatusType: 'Deployment'|'AsyncExecutions'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
