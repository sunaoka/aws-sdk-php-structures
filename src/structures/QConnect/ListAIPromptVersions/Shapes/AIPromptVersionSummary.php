<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPromptVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIPromptSummary $aiPromptSummary
 * @property int $versionNumber
 */
class AIPromptVersionSummary extends Shape
{
    /**
     * @param array{
     *     aiPromptSummary?: AIPromptSummary,
     *     versionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
