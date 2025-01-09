<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $MaxItems
 * @property string $Marker
 * @property string $CreationToken
 * @property string $FileSystemId
 */
class DescribeFileSystemsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, max>,
     *     Marker?: string,
     *     CreationToken?: string,
     *     FileSystemId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
