<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $ObjectKey
 * @property string|null $VersionId
 */
class PipelineDefinitionS3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     ObjectKey: string,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
