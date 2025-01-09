<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetPublicKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $publicKeyMaterial
 * @property string $fingerprint
 * @property array<string, string> $tags
 */
class PublicKey extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     publicKeyMaterial?: string,
     *     fingerprint?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
