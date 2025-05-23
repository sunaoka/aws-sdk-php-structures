<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string|null $etag
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     etag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
