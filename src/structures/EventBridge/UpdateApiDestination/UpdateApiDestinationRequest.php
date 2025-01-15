<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateApiDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $ConnectionArn
 * @property string|null $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE'|null $HttpMethod
 * @property int<1, max>|null $InvocationRateLimitPerSecond
 */
class UpdateApiDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ConnectionArn?: string|null,
     *     InvocationEndpoint?: string|null,
     *     HttpMethod?: 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE'|null,
     *     InvocationRateLimitPerSecond?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
