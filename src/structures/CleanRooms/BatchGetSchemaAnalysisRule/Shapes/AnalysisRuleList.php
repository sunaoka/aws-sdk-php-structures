<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $joinColumns
 * @property list<'OR'|'AND'>|null $allowedJoinOperators
 * @property list<string> $listColumns
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null $additionalAnalyses
 */
class AnalysisRuleList extends Shape
{
    /**
     * @param array{
     *     joinColumns: list<string>,
     *     allowedJoinOperators?: list<'OR'|'AND'>|null,
     *     listColumns: list<string>,
     *     additionalAnalyses?: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
