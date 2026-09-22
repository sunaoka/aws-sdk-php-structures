<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateView;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'USER'|'MANAGED' $type
 * @property string|null $description
 * @property string $definition
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $arn
 */
class CreateViewResponse extends Response
{
}
