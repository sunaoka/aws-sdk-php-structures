<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIAgentSummary $aiAgentSummary
 * @property int<1, max> $versionNumber
 */
class AIAgentVersionSummary extends Shape
{
    /**
     * @param array{
     *     aiAgentSummary?: AIAgentSummary,
     *     versionNumber?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
