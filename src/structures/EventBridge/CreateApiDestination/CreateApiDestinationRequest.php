<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateApiDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $ConnectionArn
 * @property string $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE' $HttpMethod
 * @property int<1, max>|null $InvocationRateLimitPerSecond
 */
class CreateApiDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ConnectionArn: string,
     *     InvocationEndpoint: string,
     *     HttpMethod: 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE',
     *     InvocationRateLimitPerSecond?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
