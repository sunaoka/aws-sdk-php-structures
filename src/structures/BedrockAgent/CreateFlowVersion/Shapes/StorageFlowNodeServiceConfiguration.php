<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageFlowNodeS3Configuration $s3
 */
class StorageFlowNodeServiceConfiguration extends Shape
{
    /**
     * @param array{s3?: StorageFlowNodeS3Configuration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
