<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property string $KmsKeyId
 * @property string $SnsTopicArn
 */
class LabelingJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputPath: string,
     *     KmsKeyId?: string,
     *     SnsTopicArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
