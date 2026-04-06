<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'S3Prefix'|'ManifestFile' $S3DataType
 */
class ModelSpeculativeDecodingTrainingDataSource extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     S3DataType: 'S3Prefix'|'ManifestFile'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
