<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputName
 * @property bool|null $AppManaged
 * @property ProcessingS3Input|null $S3Input
 * @property DatasetDefinition|null $DatasetDefinition
 */
class ProcessingInput extends Shape
{
    /**
     * @param array{
     *     InputName: string,
     *     AppManaged?: bool|null,
     *     S3Input?: ProcessingS3Input|null,
     *     DatasetDefinition?: DatasetDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
