<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 */
class RetrievalFlowNodeS3Configuration extends Shape
{
    /**
     * @param array{bucketName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
