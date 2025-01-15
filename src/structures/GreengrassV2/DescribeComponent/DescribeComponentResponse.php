<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DescribeComponent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $componentName
 * @property string|null $componentVersion
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property string|null $publisher
 * @property string|null $description
 * @property Shapes\CloudComponentStatus|null $status
 * @property list<Shapes\ComponentPlatform>|null $platforms
 * @property array<string, string>|null $tags
 */
class DescribeComponentResponse extends Response
{
}
