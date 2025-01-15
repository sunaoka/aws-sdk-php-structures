<?php

namespace Sunaoka\Aws\Structures\drs\UpdateFailbackReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, max>|null $bandwidthThrottling
 * @property string|null $name
 * @property string $recoveryInstanceID
 * @property bool|null $usePrivateIP
 */
class UpdateFailbackReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     bandwidthThrottling?: int<0, max>|null,
     *     name?: string|null,
     *     recoveryInstanceID: string,
     *     usePrivateIP?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
