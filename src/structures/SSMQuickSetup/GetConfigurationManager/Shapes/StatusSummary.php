<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfigurationManager\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'INITIALIZING'|'DEPLOYING'|'SUCCEEDED'|'DELETING'|'STOPPING'|'FAILED'|'STOPPED'|'DELETE_FAILED'|'STOP_FAILED'|'NONE'|null $Status
 * @property array<string, string>|null $StatusDetails
 * @property string|null $StatusMessage
 * @property 'Deployment'|'AsyncExecutions' $StatusType
 */
class StatusSummary extends Shape
{
    /**
     * @param array{
     *     LastUpdatedAt: \Aws\Api\DateTimeResult,
     *     Status?: 'INITIALIZING'|'DEPLOYING'|'SUCCEEDED'|'DELETING'|'STOPPING'|'FAILED'|'STOPPED'|'DELETE_FAILED'|'STOP_FAILED'|'NONE'|null,
     *     StatusDetails?: array<string, string>|null,
     *     StatusMessage?: string|null,
     *     StatusType: 'Deployment'|'AsyncExecutions'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
