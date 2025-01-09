<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Canceling'|'Canceled' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AccessDenied' $failureCode
 * @property string $failureReason
 * @property string $clientRequestToken
 * @property list<string> $worlds
 * @property Shapes\OutputLocation $outputLocation
 * @property string $iamRole
 * @property array<string, string> $tags
 */
class DescribeWorldExportJobResponse extends Response
{
}
