<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateThreatModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $threatModelId
 * @property string|null $title
 * @property string|null $agentSpaceId
 * @property string|null $description
 * @property Shapes\Assets|null $assets
 * @property list<Shapes\DocumentInfo>|null $scopeDocs
 * @property string|null $serviceRole
 * @property Shapes\CloudWatchLog|null $logConfig
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateThreatModelResponse extends Response
{
}
