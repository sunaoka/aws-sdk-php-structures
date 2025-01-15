<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentStageName'|'SwitchedToIntent'|null $name
 * @property string|null $value
 */
class AnalyticsIntentStageGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'IntentStageName'|'SwitchedToIntent'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
