<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ImportPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $publicKeyMaterial
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class ImportPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     publicKeyMaterial: string,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
