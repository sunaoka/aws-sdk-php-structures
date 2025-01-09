<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputName
 * @property ProcessingS3Output $S3Output
 * @property ProcessingFeatureStoreOutput $FeatureStoreOutput
 * @property bool $AppManaged
 */
class ProcessingOutput extends Shape
{
    /**
     * @param array{
     *     OutputName: string,
     *     S3Output?: ProcessingS3Output,
     *     FeatureStoreOutput?: ProcessingFeatureStoreOutput,
     *     AppManaged?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
