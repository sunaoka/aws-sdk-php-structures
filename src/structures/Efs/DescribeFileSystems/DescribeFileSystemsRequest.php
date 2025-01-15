<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $MaxItems
 * @property string|null $Marker
 * @property string|null $CreationToken
 * @property string|null $FileSystemId
 */
class DescribeFileSystemsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, max>|null,
     *     Marker?: string|null,
     *     CreationToken?: string|null,
     *     FileSystemId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
