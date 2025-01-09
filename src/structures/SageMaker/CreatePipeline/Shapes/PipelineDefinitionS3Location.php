<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $ObjectKey
 * @property string $VersionId
 */
class PipelineDefinitionS3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     ObjectKey: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
