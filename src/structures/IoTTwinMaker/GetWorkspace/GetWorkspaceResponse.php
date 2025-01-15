<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetWorkspace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property string $arn
 * @property string|null $description
 * @property list<string>|null $linkedServices
 * @property string|null $s3Location
 * @property string|null $role
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 */
class GetWorkspaceResponse extends Response
{
}
