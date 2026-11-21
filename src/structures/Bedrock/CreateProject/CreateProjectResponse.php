<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateProject;

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
class CreateProjectResponse extends Response
{
}
