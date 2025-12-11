<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartMemoryExtractionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 */
class ExtractionJob extends Shape
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
