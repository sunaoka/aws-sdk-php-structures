<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListLogSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $NextToken
 * @property int $Limit
 */
class ListLogSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
