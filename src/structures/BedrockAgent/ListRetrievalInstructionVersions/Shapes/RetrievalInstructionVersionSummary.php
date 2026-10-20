<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListRetrievalInstructionVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class RetrievalInstructionVersionSummary extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
