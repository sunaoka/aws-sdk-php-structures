<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $name
 * @property int<0, 10000> $priority
 * @property string $queueEnvironmentId
 * @property string $template
 * @property 'JSON'|'YAML' $templateType
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetQueueEnvironmentResponse extends Response
{
}
