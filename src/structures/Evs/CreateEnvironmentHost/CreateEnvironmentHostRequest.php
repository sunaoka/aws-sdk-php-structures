<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property Shapes\HostInfoForCreate $host
 * @property string|null $esxVersion
 */
class CreateEnvironmentHostRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     host: Shapes\HostInfoForCreate,
     *     esxVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
