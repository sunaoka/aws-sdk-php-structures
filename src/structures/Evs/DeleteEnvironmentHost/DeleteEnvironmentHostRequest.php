<?php

namespace Sunaoka\Aws\Structures\Evs\DeleteEnvironmentHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property string $hostName
 */
class DeleteEnvironmentHostRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     hostName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
