<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeleteEventDataStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 */
class DeleteEventDataStoreRequest extends Request
{
    /**
     * @param array{EventDataStore: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
