<?php

namespace Sunaoka\Aws\Structures\Kms\VerifyMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Message
 * @property string $KeyId
 * @property 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512' $MacAlgorithm
 * @property string|resource|\Psr\Http\Message\StreamInterface $Mac
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 */
class VerifyMacRequest extends Request
{
    /**
     * @param array{
     *     Message: string|resource|\Psr\Http\Message\StreamInterface,
     *     KeyId: string,
     *     MacAlgorithm: 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512',
     *     Mac: string|resource|\Psr\Http\Message\StreamInterface,
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
