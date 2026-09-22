<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StopTelemetryQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 */
class StopTelemetryQueryRequest extends Request
{
    /**
     * @param array{queryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
