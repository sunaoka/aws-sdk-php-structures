<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopEventDataStoreIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 */
class StopEventDataStoreIngestionRequest extends Request
{
    /**
     * @param array{EventDataStore: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
