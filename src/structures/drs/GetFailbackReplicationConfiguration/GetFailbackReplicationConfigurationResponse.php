<?php

namespace Sunaoka\Aws\Structures\drs\GetFailbackReplicationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recoveryInstanceID
 * @property string|null $name
 * @property int<0, max>|null $bandwidthThrottling
 * @property bool|null $usePrivateIP
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class GetFailbackReplicationConfigurationResponse extends Response
{
}
