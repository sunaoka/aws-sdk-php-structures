<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetFileContent|null $file
 * @property AssetZipContent|null $zip
 * @property AssetSourceUrlContent|null $sourceUrl
 */
class AssetContent extends Shape
{
    /**
     * @param array{
     *     file?: AssetFileContent|null,
     *     zip?: AssetZipContent|null,
     *     sourceUrl?: AssetSourceUrlContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
