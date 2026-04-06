<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property int<0, max>|null $associatedResourceCount
 * @property array<string, string>|null $tags
 * @property Shapes\Integrations|null $integrations
 * @property array<string, string>|null $applicationTag
 */
class GetApplicationResponse extends Response
{
}
