<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Body
 * @property string|null $S3Uri
 */
class AssetBundleImportSource extends Shape
{
    /**
     * @param array{
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     S3Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
