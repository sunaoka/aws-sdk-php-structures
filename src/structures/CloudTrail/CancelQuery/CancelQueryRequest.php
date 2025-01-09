<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CancelQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string $QueryId
 * @property string $EventDataStoreOwnerAccountId
 */
class CancelQueryRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string,
     *     QueryId: string,
     *     EventDataStoreOwnerAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
