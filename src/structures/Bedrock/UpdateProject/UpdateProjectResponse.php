<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property 'active'|'archived' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $archivedAt
 * @property Shapes\ProjectDataRetention $dataRetention
 */
class UpdateProjectResponse extends Response
{
}
