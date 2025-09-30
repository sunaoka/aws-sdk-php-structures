<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetLayout;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $layoutId
 * @property string $layoutArn
 * @property string $name
 * @property Shapes\LayoutContent $content
 * @property array<string, string>|null $tags
 * @property bool|null $deleted
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class GetLayoutResponse extends Response
{
}
