<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartEventDataStoreIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 */
class StartEventDataStoreIngestionRequest extends Request
{
    /**
     * @param array{EventDataStore: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
