<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConformancePackComplianceScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ConformancePackNames
 */
class ConformancePackComplianceScoresFilters extends Shape
{
    /**
     * @param array{ConformancePackNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
