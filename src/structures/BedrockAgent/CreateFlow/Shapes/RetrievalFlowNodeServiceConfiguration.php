<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFlowNodeS3Configuration $s3
 */
class RetrievalFlowNodeServiceConfiguration extends Shape
{
    /**
     * @param array{s3?: RetrievalFlowNodeS3Configuration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
