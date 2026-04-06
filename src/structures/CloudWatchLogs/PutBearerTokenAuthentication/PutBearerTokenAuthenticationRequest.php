<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutBearerTokenAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 * @property bool $bearerTokenAuthenticationEnabled
 */
class PutBearerTokenAuthenticationRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifier: string,
     *     bearerTokenAuthenticationEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
