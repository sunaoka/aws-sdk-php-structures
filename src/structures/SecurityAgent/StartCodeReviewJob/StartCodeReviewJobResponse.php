<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StartCodeReviewJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $title
 * @property 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $codeReviewId
 * @property string $codeReviewJobId
 * @property string|null $agentSpaceId
 */
class StartCodeReviewJobResponse extends Response
{
}
