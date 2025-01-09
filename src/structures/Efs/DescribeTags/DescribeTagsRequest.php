<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $MaxItems
 * @property string $Marker
 * @property string $FileSystemId
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, max>,
     *     Marker?: string,
     *     FileSystemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
