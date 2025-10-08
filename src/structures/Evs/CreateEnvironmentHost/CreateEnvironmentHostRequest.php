<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property Shapes\HostInfoForCreate $host
 */
class CreateEnvironmentHostRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     host: Shapes\HostInfoForCreate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
