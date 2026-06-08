<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetFiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property Document|null $metadata
 * @property int $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AssetFileSummary extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     metadata?: Document|null,
     *     version: int,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
