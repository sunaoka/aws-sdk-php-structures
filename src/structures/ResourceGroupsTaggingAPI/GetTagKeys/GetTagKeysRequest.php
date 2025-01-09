<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetTagKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PaginationToken
 */
class GetTagKeysRequest extends Request
{
    /**
     * @param array{PaginationToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
