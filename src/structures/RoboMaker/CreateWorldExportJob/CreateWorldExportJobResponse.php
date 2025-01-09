<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Canceling'|'Canceled' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AccessDenied' $failureCode
 * @property string $clientRequestToken
 * @property Shapes\OutputLocation $outputLocation
 * @property string $iamRole
 * @property array<string, string> $tags
 */
class CreateWorldExportJobResponse extends Response
{
}
