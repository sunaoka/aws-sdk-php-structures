<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageReceipts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PageId
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 */
class ListPageReceiptsRequest extends Request
{
    /**
     * @param array{
     *     PageId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
