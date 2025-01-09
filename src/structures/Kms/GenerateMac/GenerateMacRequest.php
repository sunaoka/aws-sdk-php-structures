<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateMac;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Message
 * @property string $KeyId
 * @property 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512' $MacAlgorithm
 * @property list<string> $GrantTokens
 * @property bool $DryRun
 */
class GenerateMacRequest extends Request
{
    /**
     * @param array{
     *     Message: string,
     *     KeyId: string,
     *     MacAlgorithm: 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512',
     *     GrantTokens?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
