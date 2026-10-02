<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property 'SUCCESS'|'PROCESSING'|'FAILED' $status
 * @property string $operationType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $brandProfileId
 * @property string|null $errorCode
 * @property string|null $errorMessage
 * @property list<Shapes\JobResource>|null $resources
 */
class GetJobResponse extends Response
{
}
