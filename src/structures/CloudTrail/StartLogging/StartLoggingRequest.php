<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StartLoggingRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
