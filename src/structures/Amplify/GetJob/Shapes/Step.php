<?php

namespace Sunaoka\Aws\Structures\Amplify\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'CREATED'|'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $logUrl
 * @property string $artifactsUrl
 * @property string $testArtifactsUrl
 * @property string $testConfigUrl
 * @property array<string, string> $screenshots
 * @property string $statusReason
 * @property string $context
 */
class Step extends Shape
{
    /**
     * @param array{
     *     stepName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'CREATED'|'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED',
     *     endTime: \Aws\Api\DateTimeResult,
     *     logUrl?: string,
     *     artifactsUrl?: string,
     *     testArtifactsUrl?: string,
     *     testConfigUrl?: string,
     *     screenshots?: array<string, string>,
     *     statusReason?: string,
     *     context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
