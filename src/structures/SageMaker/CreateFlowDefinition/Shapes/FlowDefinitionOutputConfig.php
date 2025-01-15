<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property string|null $KmsKeyId
 */
class FlowDefinitionOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputPath: string,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
