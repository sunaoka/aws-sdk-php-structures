<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property string $intentPath
 * @property int $intentCount
 * @property int<0, 100> $intentLevel
 * @property 'Inner'|'Exit' $nodeType
 */
class AnalyticsIntentNodeSummary extends Shape
{
    /**
     * @param array{
     *     intentName?: string,
     *     intentPath?: string,
     *     intentCount?: int,
     *     intentLevel?: int<0, 100>,
     *     nodeType?: 'Inner'|'Exit'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
