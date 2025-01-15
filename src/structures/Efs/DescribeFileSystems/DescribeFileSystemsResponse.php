<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystems;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Marker
 * @property list<Shapes\FileSystemDescription>|null $FileSystems
 * @property string|null $NextMarker
 */
class DescribeFileSystemsResponse extends Response
{
}
