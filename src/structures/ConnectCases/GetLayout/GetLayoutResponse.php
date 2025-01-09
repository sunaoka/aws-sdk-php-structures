<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetLayout;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\LayoutContent $content
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property bool $deleted
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $layoutArn
 * @property string $layoutId
 * @property string $name
 * @property array<string, string> $tags
 */
class GetLayoutResponse extends Response
{
}
