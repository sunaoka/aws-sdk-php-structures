<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssetFile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $bytes
 * @property string|null $text
 */
class AssetFileBody extends Shape
{
    /**
     * @param array{
     *     bytes?: \Psr\Http\Message\StreamInterface|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
