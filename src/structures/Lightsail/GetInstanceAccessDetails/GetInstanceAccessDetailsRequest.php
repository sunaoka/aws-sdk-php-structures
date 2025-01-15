<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property 'ssh'|'rdp'|null $protocol
 */
class GetInstanceAccessDetailsRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     protocol?: 'ssh'|'rdp'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
