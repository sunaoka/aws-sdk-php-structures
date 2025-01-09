<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property int $associatedResourceCount
 * @property array<string, string> $tags
 * @property Shapes\Integrations $integrations
 * @property array<string, string> $applicationTag
 */
class GetApplicationResponse extends Response
{
}
