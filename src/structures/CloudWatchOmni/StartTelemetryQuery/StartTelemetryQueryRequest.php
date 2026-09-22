<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StartTelemetryQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryString
 * @property string $sessionId
 */
class StartTelemetryQueryRequest extends Request
{
    /**
     * @param array{
     *     queryString: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
