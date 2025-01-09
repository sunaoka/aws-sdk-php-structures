<?php

namespace Sunaoka\Aws\Structures\drs\UpdateFailbackReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $bandwidthThrottling
 * @property string $name
 * @property string $recoveryInstanceID
 * @property bool $usePrivateIP
 */
class UpdateFailbackReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     bandwidthThrottling?: int,
     *     name?: string,
     *     recoveryInstanceID: string,
     *     usePrivateIP?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
