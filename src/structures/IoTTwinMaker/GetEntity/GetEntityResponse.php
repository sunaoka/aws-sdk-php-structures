<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $entityId
 * @property string $entityName
 * @property string $arn
 * @property Shapes\Status $status
 * @property string $workspaceId
 * @property string|null $description
 * @property array<string, Shapes\ComponentResponse>|null $components
 * @property string $parentEntityId
 * @property bool $hasChildEntities
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property string|null $syncSource
 * @property bool|null $areAllComponentsReturned
 */
class GetEntityResponse extends Response
{
}
