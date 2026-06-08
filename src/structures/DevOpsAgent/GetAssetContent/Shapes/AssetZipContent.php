<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssetContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $zipFile
 */
class AssetZipContent extends Shape
{
    /**
     * @param array{zipFile: \Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
