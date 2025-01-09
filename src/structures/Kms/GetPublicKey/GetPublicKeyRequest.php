<?php

namespace Sunaoka\Aws\Structures\Kms\GetPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property list<string> $GrantTokens
 */
class GetPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     GrantTokens?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
