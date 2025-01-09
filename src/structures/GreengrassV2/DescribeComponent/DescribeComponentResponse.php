<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DescribeComponent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $componentName
 * @property string $componentVersion
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property string $publisher
 * @property string $description
 * @property Shapes\CloudComponentStatus $status
 * @property list<Shapes\ComponentPlatform> $platforms
 * @property array<string, string> $tags
 */
class DescribeComponentResponse extends Response
{
}
