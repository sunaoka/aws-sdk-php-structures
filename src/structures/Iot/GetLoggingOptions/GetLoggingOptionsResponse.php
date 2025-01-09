<?php

namespace Sunaoka\Aws\Structures\Iot\GetLoggingOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $roleArn
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED' $logLevel
 */
class GetLoggingOptionsResponse extends Response
{
}
