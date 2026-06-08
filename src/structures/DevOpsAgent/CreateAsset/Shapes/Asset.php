<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $assetType
 * @property Document $metadata
 * @property int $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Asset extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     assetType: string,
     *     metadata: Document,
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
