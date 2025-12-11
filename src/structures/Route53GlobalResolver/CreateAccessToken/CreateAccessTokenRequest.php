<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $dnsViewId
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class CreateAccessTokenRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dnsViewId: string,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
