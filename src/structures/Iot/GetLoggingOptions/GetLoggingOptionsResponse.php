<?php

namespace Sunaoka\Aws\Structures\Iot\GetLoggingOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $roleArn
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null $logLevel
 */
class GetLoggingOptionsResponse extends Response
{
}
