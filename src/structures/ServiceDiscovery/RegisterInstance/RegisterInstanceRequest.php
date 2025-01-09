<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\RegisterInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceId
 * @property string $InstanceId
 * @property string $CreatorRequestId
 * @property array<string, string> $Attributes
 */
class RegisterInstanceRequest extends Request
{
    /**
     * @param array{
     *     ServiceId: string,
     *     InstanceId: string,
     *     CreatorRequestId?: string,
     *     Attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
