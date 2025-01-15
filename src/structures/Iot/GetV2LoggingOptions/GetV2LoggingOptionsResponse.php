<?php

namespace Sunaoka\Aws\Structures\Iot\GetV2LoggingOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $roleArn
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null $defaultLogLevel
 * @property bool|null $disableAllLogs
 */
class GetV2LoggingOptionsResponse extends Response
{
}
