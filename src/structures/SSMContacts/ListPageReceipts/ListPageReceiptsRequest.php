<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageReceipts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PageId
 * @property string $NextToken
 * @property int<0, 1024> $MaxResults
 */
class ListPageReceiptsRequest extends Request
{
    /**
     * @param array{
     *     PageId: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 1024>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
