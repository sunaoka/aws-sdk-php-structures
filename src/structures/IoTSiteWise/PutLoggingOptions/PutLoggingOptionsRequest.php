<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutLoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LoggingOptions $loggingOptions
 * @property string|null $workspaceName
 */
class PutLoggingOptionsRequest extends Request
{
    /**
     * @param array{
     *     loggingOptions: Shapes\LoggingOptions,
     *     workspaceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
