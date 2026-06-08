<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetType
 * @property string $description
 */
class AssetTypeSummary extends Shape
{
    /**
     * @param array{
     *     assetType: string,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
