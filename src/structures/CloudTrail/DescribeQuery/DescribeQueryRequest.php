<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventDataStore
 * @property string|null $QueryId
 * @property string|null $QueryAlias
 * @property string|null $RefreshId
 * @property string|null $EventDataStoreOwnerAccountId
 */
class DescribeQueryRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string|null,
     *     QueryId?: string|null,
     *     QueryAlias?: string|null,
     *     RefreshId?: string|null,
     *     EventDataStoreOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
