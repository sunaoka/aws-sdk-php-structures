<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateApiDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $ConnectionArn
 * @property string $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE' $HttpMethod
 * @property int $InvocationRateLimitPerSecond
 */
class UpdateApiDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ConnectionArn?: string,
     *     InvocationEndpoint?: string,
     *     HttpMethod?: 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE',
     *     InvocationRateLimitPerSecond?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
