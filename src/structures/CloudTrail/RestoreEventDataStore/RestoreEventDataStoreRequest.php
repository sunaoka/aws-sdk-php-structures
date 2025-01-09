<?php

namespace Sunaoka\Aws\Structures\CloudTrail\RestoreEventDataStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 */
class RestoreEventDataStoreRequest extends Request
{
    /**
     * @param array{EventDataStore: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
