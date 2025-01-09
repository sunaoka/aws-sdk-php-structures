<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopLoggingRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
