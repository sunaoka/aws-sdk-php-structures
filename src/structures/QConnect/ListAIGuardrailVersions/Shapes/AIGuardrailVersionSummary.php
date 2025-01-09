<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIGuardrailSummary $aiGuardrailSummary
 * @property int $versionNumber
 */
class AIGuardrailVersionSummary extends Shape
{
    /**
     * @param array{
     *     aiGuardrailSummary?: AIGuardrailSummary,
     *     versionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
