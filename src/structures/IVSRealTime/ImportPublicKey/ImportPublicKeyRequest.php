<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ImportPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $publicKeyMaterial
 * @property string $name
 * @property array<string, string> $tags
 */
class ImportPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     publicKeyMaterial: string,
     *     name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
