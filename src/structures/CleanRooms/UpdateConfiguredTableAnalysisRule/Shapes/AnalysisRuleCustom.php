<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAnalyses
 * @property list<string>|null $allowedAnalysisProviders
 */
class AnalysisRuleCustom extends Shape
{
    /**
     * @param array{
     *     allowedAnalyses: list<string>,
     *     allowedAnalysisProviders?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
