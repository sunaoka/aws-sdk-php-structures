<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetPublicKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $publicKeyMaterial
 * @property string|null $fingerprint
 * @property array<string, string>|null $tags
 */
class PublicKey extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     publicKeyMaterial?: string|null,
     *     fingerprint?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
