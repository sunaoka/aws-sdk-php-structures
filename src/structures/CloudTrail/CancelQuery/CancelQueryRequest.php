<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CancelQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventDataStore
 * @property string $QueryId
 */
class CancelQueryRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string|null,
     *     QueryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
