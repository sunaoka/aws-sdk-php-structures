<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContactLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $PageSize
 * @property string $NextToken
 */
class ListContactListsRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
