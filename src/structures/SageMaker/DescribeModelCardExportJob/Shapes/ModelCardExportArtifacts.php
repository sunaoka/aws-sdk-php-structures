<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCardExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3ExportArtifacts
 */
class ModelCardExportArtifacts extends Shape
{
    /**
     * @param array{S3ExportArtifacts: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
