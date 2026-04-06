<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageFlowNodeS3Configuration|null $s3
 */
class StorageFlowNodeServiceConfiguration extends Shape
{
    /**
     * @param array{s3?: StorageFlowNodeS3Configuration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
