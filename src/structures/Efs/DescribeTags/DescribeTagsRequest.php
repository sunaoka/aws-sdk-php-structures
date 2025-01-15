<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $MaxItems
 * @property string|null $Marker
 * @property string $FileSystemId
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, max>|null,
     *     Marker?: string|null,
     *     FileSystemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
