<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PublishPackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $size
 * @property array<'MD5'|'SHA-1'|'SHA-256'|'SHA-512', string> $hashes
 */
class AssetSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     size?: int,
     *     hashes?: array<'MD5'|'SHA-1'|'SHA-256'|'SHA-512', string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
