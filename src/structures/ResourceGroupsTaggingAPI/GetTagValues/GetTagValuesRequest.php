<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetTagValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PaginationToken
 * @property string $Key
 */
class GetTagValuesRequest extends Request
{
    /**
     * @param array{
     *     PaginationToken?: string,
     *     Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
