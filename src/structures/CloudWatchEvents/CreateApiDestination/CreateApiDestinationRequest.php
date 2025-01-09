<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateApiDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $ConnectionArn
 * @property string $InvocationEndpoint
 * @property 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE' $HttpMethod
 * @property int<1, max> $InvocationRateLimitPerSecond
 */
class CreateApiDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ConnectionArn: string,
     *     InvocationEndpoint: string,
     *     HttpMethod: 'POST'|'GET'|'HEAD'|'OPTIONS'|'PUT'|'PATCH'|'DELETE',
     *     InvocationRateLimitPerSecond?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
