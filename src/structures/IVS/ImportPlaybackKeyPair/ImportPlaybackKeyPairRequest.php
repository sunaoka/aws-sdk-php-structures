<?php

namespace Sunaoka\Aws\Structures\IVS\ImportPlaybackKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string $publicKeyMaterial
 * @property array<string, string>|null $tags
 */
class ImportPlaybackKeyPairRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     publicKeyMaterial: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
