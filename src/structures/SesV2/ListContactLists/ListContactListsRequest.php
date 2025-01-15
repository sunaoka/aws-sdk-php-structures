<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContactLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $PageSize
 * @property string|null $NextToken
 */
class ListContactListsRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
