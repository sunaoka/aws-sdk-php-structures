<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystems;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Marker
 * @property list<Shapes\FileSystemDescription> $FileSystems
 * @property string $NextMarker
 */
class DescribeFileSystemsResponse extends Response
{
}
