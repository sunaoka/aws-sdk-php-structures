<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $StorageClass
 * @property list<Permission>|null $Permissions
 */
class PipelineOutputConfig extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     StorageClass?: string|null,
     *     Permissions?: list<Permission>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
