<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIGuardrailSummary|null $aiGuardrailSummary
 * @property int<1, max>|null $versionNumber
 */
class AIGuardrailVersionSummary extends Shape
{
    /**
     * @param array{
     *     aiGuardrailSummary?: AIGuardrailSummary|null,
     *     versionNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
