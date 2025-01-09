<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $StorageClass
 * @property list<Permission> $Permissions
 */
class PipelineOutputConfig extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     StorageClass?: string,
     *     Permissions?: list<Permission>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
