<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $queueEnvironmentId
 * @property string $name
 * @property int<0, 10000> $priority
 * @property 'JSON'|'YAML' $templateType
 * @property string $template
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetQueueEnvironmentResponse extends Response
{
}
