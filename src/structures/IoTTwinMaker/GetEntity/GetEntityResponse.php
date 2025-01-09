<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $entityId
 * @property string $entityName
 * @property string $arn
 * @property Shapes\Status $status
 * @property string $workspaceId
 * @property string $description
 * @property array<string, Shapes\ComponentResponse> $components
 * @property string $parentEntityId
 * @property bool $hasChildEntities
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property string $syncSource
 * @property bool $areAllComponentsReturned
 */
class GetEntityResponse extends Response
{
}
