<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxItems
 * @property string $Marker
 * @property string $FileSystemId
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int,
     *     Marker?: string,
     *     FileSystemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
