<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetAuthorizationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property int $durationSeconds
 */
class GetAuthorizationTokenRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     durationSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
