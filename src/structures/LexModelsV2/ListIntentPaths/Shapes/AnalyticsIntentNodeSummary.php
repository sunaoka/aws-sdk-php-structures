<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentName
 * @property string|null $intentPath
 * @property int|null $intentCount
 * @property int<0, 100>|null $intentLevel
 * @property 'Inner'|'Exit'|null $nodeType
 */
class AnalyticsIntentNodeSummary extends Shape
{
    /**
     * @param array{
     *     intentName?: string|null,
     *     intentPath?: string|null,
     *     intentCount?: int|null,
     *     intentLevel?: int<0, 100>|null,
     *     nodeType?: 'Inner'|'Exit'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
