<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetTagValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PaginationToken
 * @property string $Key
 */
class GetTagValuesRequest extends Request
{
    /**
     * @param array{
     *     PaginationToken?: string|null,
     *     Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
