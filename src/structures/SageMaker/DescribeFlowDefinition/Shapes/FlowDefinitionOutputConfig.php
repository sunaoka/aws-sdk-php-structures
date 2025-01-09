<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property string $KmsKeyId
 */
class FlowDefinitionOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputPath: string,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
