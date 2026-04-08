<?php

namespace Sunaoka\Aws\Structures\drs\UpdateFailbackReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryInstanceID
 * @property string|null $name
 * @property int<0, max>|null $bandwidthThrottling
 * @property bool|null $usePrivateIP
 * @property 'IPV4'|'IPV6'|null $internetProtocol
 */
class UpdateFailbackReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     recoveryInstanceID: string,
     *     name?: string|null,
     *     bandwidthThrottling?: int<0, max>|null,
     *     usePrivateIP?: bool|null,
     *     internetProtocol?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
