<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormAIVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AIVersionName
 * @property EvaluationFormAIVersionLifecycle $AIVersionLifecycle
 */
class EvaluationFormAIVersionSummary extends Shape
{
    /**
     * @param array{
     *     AIVersionName: string,
     *     AIVersionLifecycle: EvaluationFormAIVersionLifecycle
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
