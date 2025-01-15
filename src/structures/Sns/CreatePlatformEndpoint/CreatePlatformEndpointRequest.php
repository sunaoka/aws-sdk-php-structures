<?php

namespace Sunaoka\Aws\Structures\Sns\CreatePlatformEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformApplicationArn
 * @property string $Token
 * @property string|null $CustomUserData
 * @property array<string, string>|null $Attributes
 */
class CreatePlatformEndpointRequest extends Request
{
    /**
     * @param array{
     *     PlatformApplicationArn: string,
     *     Token: string,
     *     CustomUserData?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
