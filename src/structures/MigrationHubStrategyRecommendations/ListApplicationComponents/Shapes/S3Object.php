<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Bucket
 * @property string|null $s3key
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string|null,
     *     s3key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
