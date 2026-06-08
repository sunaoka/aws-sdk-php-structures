<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $zipFile
 */
class AssetZipContent extends Shape
{
    /**
     * @param array{zipFile: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
