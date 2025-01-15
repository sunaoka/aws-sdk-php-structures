<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string $componentName
 * @property string $componentVersion
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property Shapes\CloudComponentStatus $status
 */
class CreateComponentVersionResponse extends Response
{
}
