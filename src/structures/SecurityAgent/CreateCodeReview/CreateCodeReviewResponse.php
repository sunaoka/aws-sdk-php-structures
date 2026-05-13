<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateCodeReview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $codeReviewId
 * @property string|null $title
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property Shapes\Assets|null $assets
 * @property string|null $serviceRole
 * @property Shapes\CloudWatchLog|null $logConfig
 * @property string|null $agentSpaceId
 * @property 'AUTOMATIC'|'DISABLED'|null $codeRemediationStrategy
 */
class CreateCodeReviewResponse extends Response
{
}
