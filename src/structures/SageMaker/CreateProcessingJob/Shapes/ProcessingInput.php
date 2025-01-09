<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputName
 * @property bool $AppManaged
 * @property ProcessingS3Input $S3Input
 * @property DatasetDefinition $DatasetDefinition
 */
class ProcessingInput extends Shape
{
    /**
     * @param array{
     *     InputName: string,
     *     AppManaged?: bool,
     *     S3Input?: ProcessingS3Input,
     *     DatasetDefinition?: DatasetDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
