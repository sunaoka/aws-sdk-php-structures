<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputName
 * @property ProcessingS3Output|null $S3Output
 * @property ProcessingFeatureStoreOutput|null $FeatureStoreOutput
 * @property bool|null $AppManaged
 */
class ProcessingOutput extends Shape
{
    /**
     * @param array{
     *     OutputName: string,
     *     S3Output?: ProcessingS3Output|null,
     *     FeatureStoreOutput?: ProcessingFeatureStoreOutput|null,
     *     AppManaged?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
