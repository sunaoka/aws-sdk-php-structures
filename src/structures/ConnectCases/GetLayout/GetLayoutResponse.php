<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetLayout;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\LayoutContent $content
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property bool|null $deleted
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property string $layoutArn
 * @property string $layoutId
 * @property string $name
 * @property array<string, string>|null $tags
 */
class GetLayoutResponse extends Response
{
}
