<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Canceling'|'Canceled'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'InternalServiceError'|'LimitExceeded'|'ResourceNotFound'|'RequestThrottled'|'InvalidInput'|'AccessDenied'|null $failureCode
 * @property string|null $clientRequestToken
 * @property Shapes\OutputLocation|null $outputLocation
 * @property string|null $iamRole
 * @property array<string, string>|null $tags
 */
class CreateWorldExportJobResponse extends Response
{
}
