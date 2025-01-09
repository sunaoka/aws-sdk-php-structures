<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeRootFolders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property int<1, 999> $Limit
 * @property string $Marker
 */
class DescribeRootFoldersRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken: string,
     *     Limit?: int<1, 999>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
