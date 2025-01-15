<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetTagKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PaginationToken
 */
class GetTagKeysRequest extends Request
{
    /**
     * @param array{PaginationToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
