<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $MatchedCategories
 * @property array<string, CategoryDetails> $MatchedDetails
 */
class Categories extends Shape
{
    /**
     * @param array{
     *     MatchedCategories: list<string>,
     *     MatchedDetails: array<string, CategoryDetails>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
