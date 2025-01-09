<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetWorkspace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property string $arn
 * @property string $description
 * @property list<string> $linkedServices
 * @property string $s3Location
 * @property string $role
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 */
class GetWorkspaceResponse extends Response
{
}
