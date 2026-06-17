<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 */
class AssetSourceUrlContent extends Shape
{
    /**
     * @param array{url: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
