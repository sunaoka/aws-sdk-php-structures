<?php

namespace Sunaoka\Aws\Structures\Sns\CreatePlatformEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformApplicationArn
 * @property string $Token
 * @property string $CustomUserData
 * @property array<string, string> $Attributes
 */
class CreatePlatformEndpointRequest extends Request
{
    /**
     * @param array{
     *     PlatformApplicationArn: string,
     *     Token: string,
     *     CustomUserData?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
