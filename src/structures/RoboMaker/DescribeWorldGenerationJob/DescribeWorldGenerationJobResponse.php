<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'PartialFailed'|'Canceling'|'Canceled' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AllWorldGenerationFailed' $failureCode
 * @property string $failureReason
 * @property string $clientRequestToken
 * @property string $template
 * @property Shapes\WorldCount $worldCount
 * @property Shapes\FinishedWorldsSummary $finishedWorldsSummary
 * @property array<string, string> $tags
 * @property array<string, string> $worldTags
 */
class DescribeWorldGenerationJobResponse extends Response
{
}
