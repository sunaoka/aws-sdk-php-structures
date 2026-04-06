<?php

namespace Sunaoka\Aws\Structures\Amplify\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'CREATED'|'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED' $status
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string|null $logUrl
 * @property string|null $artifactsUrl
 * @property string|null $testArtifactsUrl
 * @property string|null $testConfigUrl
 * @property array<string, string>|null $screenshots
 * @property string|null $statusReason
 * @property string|null $context
 */
class Step extends Shape
{
    /**
     * @param array{
     *     stepName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'CREATED'|'PENDING'|'PROVISIONING'|'RUNNING'|'FAILED'|'SUCCEED'|'CANCELLING'|'CANCELLED',
     *     endTime: \Aws\Api\DateTimeResult,
     *     logUrl?: string|null,
     *     artifactsUrl?: string|null,
     *     testArtifactsUrl?: string|null,
     *     testConfigUrl?: string|null,
     *     screenshots?: array<string, string>|null,
     *     statusReason?: string|null,
     *     context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
