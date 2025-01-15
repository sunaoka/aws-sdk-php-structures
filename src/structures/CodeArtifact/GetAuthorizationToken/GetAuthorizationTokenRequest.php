<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetAuthorizationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property int<0, 43200>|null $durationSeconds
 */
class GetAuthorizationTokenRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     durationSeconds?: int<0, 43200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
