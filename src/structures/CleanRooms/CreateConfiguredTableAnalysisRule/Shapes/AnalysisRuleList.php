<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $joinColumns
 * @property list<'OR'|'AND'> $allowedJoinOperators
 * @property list<string> $listColumns
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED' $additionalAnalyses
 */
class AnalysisRuleList extends Shape
{
    /**
     * @param array{
     *     joinColumns: list<string>,
     *     allowedJoinOperators?: list<'OR'|'AND'>,
     *     listColumns: list<string>,
     *     additionalAnalyses?: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
