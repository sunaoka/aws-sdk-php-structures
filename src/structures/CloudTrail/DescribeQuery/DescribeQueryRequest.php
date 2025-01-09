<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string $QueryId
 * @property string $QueryAlias
 * @property string $RefreshId
 * @property string $EventDataStoreOwnerAccountId
 */
class DescribeQueryRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string,
     *     QueryId?: string,
     *     QueryAlias?: string,
     *     RefreshId?: string,
     *     EventDataStoreOwnerAccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
