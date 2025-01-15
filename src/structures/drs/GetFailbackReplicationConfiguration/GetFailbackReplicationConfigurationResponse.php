<?php

namespace Sunaoka\Aws\Structures\drs\GetFailbackReplicationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, max>|null $bandwidthThrottling
 * @property string|null $name
 * @property string $recoveryInstanceID
 * @property bool|null $usePrivateIP
 */
class GetFailbackReplicationConfigurationResponse extends Response
{
}
