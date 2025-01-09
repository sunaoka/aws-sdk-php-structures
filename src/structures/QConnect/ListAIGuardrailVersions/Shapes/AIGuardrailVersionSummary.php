<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIGuardrailSummary $aiGuardrailSummary
 * @property int<1, max> $versionNumber
 */
class AIGuardrailVersionSummary extends Shape
{
    /**
     * @param array{
     *     aiGuardrailSummary?: AIGuardrailSummary,
     *     versionNumber?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
