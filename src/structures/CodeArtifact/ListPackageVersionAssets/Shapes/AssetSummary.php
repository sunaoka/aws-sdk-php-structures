<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int|null $size
 * @property array<'MD5'|'SHA-1'|'SHA-256'|'SHA-512', string>|null $hashes
 */
class AssetSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     size?: int|null,
     *     hashes?: array<'MD5'|'SHA-1'|'SHA-256'|'SHA-512', string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
