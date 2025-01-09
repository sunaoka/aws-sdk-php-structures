<?php

namespace Sunaoka\Aws\Structures\IVS\ImportPlaybackKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $publicKeyMaterial
 * @property array<string, string> $tags
 */
class ImportPlaybackKeyPairRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     publicKeyMaterial: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
