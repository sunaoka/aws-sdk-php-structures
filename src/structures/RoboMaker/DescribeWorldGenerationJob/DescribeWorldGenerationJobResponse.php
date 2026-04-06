<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldGenerationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'PartialFailed'|'Canceling'|'Canceled'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AllWorldGenerationFailed'|null $failureCode
 * @property string|null $failureReason
 * @property string|null $clientRequestToken
 * @property string|null $template
 * @property Shapes\WorldCount|null $worldCount
 * @property Shapes\FinishedWorldsSummary|null $finishedWorldsSummary
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $worldTags
 */
class DescribeWorldGenerationJobResponse extends Response
{
}
