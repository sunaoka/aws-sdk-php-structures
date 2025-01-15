<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListLogSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DirectoryId
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class ListLogSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
