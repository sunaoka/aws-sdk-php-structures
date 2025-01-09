<?php

namespace Sunaoka\Aws\Structures\Iot\GetV2LoggingOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $roleArn
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED' $defaultLogLevel
 * @property bool $disableAllLogs
 */
class GetV2LoggingOptionsResponse extends Response
{
}
