<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIAgentSummary|null $aiAgentSummary
 * @property int<1, max>|null $versionNumber
 */
class AIAgentVersionSummary extends Shape
{
    /**
     * @param array{
     *     aiAgentSummary?: AIAgentSummary|null,
     *     versionNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
