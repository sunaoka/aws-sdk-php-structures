<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAnalyzerRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botLocale
 * @property string|null $intentId
 * @property string|null $slotId
 */
class IssueLocation extends Shape
{
    /**
     * @param array{
     *     botLocale?: string|null,
     *     intentId?: string|null,
     *     slotId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
