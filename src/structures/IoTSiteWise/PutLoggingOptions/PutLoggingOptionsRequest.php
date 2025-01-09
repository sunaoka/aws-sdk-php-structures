<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutLoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LoggingOptions $loggingOptions
 */
class PutLoggingOptionsRequest extends Request
{
    /**
     * @param array{loggingOptions: Shapes\LoggingOptions} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
