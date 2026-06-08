<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AssetVersionMetadata extends Shape
{
    /**
     * @param array{
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
