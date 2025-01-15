<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ConfigureLogs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $CreatedAt
 * @property string|null $Description
 * @property Shapes\EgressAccessLogs|null $EgressAccessLogs
 * @property Shapes\HlsIngest|null $HlsIngest
 * @property string|null $Id
 * @property Shapes\IngressAccessLogs|null $IngressAccessLogs
 * @property array<string, string>|null $Tags
 */
class ConfigureLogsResponse extends Response
{
}
