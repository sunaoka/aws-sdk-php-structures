<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListIpRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $NextToken
 * @property int<0, max> $Limit
 */
class ListIpRoutesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     NextToken?: string,
     *     Limit?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
