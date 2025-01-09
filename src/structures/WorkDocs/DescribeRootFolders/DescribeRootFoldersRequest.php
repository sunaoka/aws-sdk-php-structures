<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeRootFolders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property int $Limit
 * @property string $Marker
 */
class DescribeRootFoldersRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken: string,
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
