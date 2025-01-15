<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property string|null $KmsKeyId
 * @property string|null $SnsTopicArn
 */
class LabelingJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputPath: string,
     *     KmsKeyId?: string|null,
     *     SnsTopicArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
