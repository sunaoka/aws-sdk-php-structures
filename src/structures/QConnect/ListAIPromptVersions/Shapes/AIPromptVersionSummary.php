<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPromptVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIPromptSummary|null $aiPromptSummary
 * @property int<1, max>|null $versionNumber
 */
class AIPromptVersionSummary extends Shape
{
    /**
     * @param array{
     *     aiPromptSummary?: AIPromptSummary|null,
     *     versionNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
