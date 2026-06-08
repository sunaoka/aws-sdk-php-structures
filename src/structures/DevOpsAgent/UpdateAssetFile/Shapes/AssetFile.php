<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssetFile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property AssetFileBody $content
 * @property Document|null $metadata
 * @property int $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AssetFile extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     content: AssetFileBody,
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
