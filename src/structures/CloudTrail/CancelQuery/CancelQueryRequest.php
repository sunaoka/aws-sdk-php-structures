<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CancelQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventDataStore
 * @property string $QueryId
 * @property string|null $EventDataStoreOwnerAccountId
 */
class CancelQueryRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string|null,
     *     QueryId: string,
     *     EventDataStoreOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
