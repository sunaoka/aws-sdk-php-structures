<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFlowNodeS3Configuration|null $s3
 */
class RetrievalFlowNodeServiceConfiguration extends Shape
{
    /**
     * @param array{s3?: RetrievalFlowNodeS3Configuration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
