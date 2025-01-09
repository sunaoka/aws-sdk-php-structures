<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numDistinctSubjects
 * @property int $numDistinctPredicates
 * @property int $numQuads
 * @property int $numClasses
 * @property list<string> $classes
 * @property list<array<string, int>> $predicates
 * @property list<SubjectStructure> $subjectStructures
 */
class RDFGraphSummary extends Shape
{
    /**
     * @param array{
     *     numDistinctSubjects?: int,
     *     numDistinctPredicates?: int,
     *     numQuads?: int,
     *     numClasses?: int,
     *     classes?: list<string>,
     *     predicates?: list<array<string, int>>,
     *     subjectStructures?: list<SubjectStructure>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
