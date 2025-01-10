<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 * @property string $S3Uri
 */
class AssetBundleImportSource extends Shape
{
    /**
     * @param array{
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface,
     *     S3Uri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
