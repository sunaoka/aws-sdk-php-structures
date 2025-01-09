<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventDataStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 */
class GetEventDataStoreRequest extends Request
{
    /**
     * @param array{EventDataStore: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
