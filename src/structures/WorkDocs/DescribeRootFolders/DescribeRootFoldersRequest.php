<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeRootFolders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property int<1, 999>|null $Limit
 * @property string|null $Marker
 */
class DescribeRootFoldersRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken: string,
     *     Limit?: int<1, 999>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
