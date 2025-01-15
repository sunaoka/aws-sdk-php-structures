<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Message
 * @property string $KeyId
 * @property 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512' $MacAlgorithm
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 */
class GenerateMacRequest extends Request
{
    /**
     * @param array{
     *     Message: string|resource|\Psr\Http\Message\StreamInterface,
     *     KeyId: string,
     *     MacAlgorithm: 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512',
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
