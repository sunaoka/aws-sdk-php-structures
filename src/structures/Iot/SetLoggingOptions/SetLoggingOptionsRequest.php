<?php

namespace Sunaoka\Aws\Structures\Iot\SetLoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LoggingOptionsPayload $loggingOptionsPayload
 */
class SetLoggingOptionsRequest extends Request
{
    /**
     * @param array{loggingOptionsPayload: Shapes\LoggingOptionsPayload} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
