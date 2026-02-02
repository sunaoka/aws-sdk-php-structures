<?php

namespace Sunaoka\Aws\Structures\Connect\SearchTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TestCaseSearchCriteria>|null $OrConditions
 * @property list<TestCaseSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property 'PUBLISHED'|'SAVED'|null $StatusCondition
 */
class TestCaseSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<TestCaseSearchCriteria>|null,
     *     AndConditions?: list<TestCaseSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     StatusCondition?: 'PUBLISHED'|'SAVED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
