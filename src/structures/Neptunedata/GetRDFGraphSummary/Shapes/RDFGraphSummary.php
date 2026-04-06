<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numDistinctSubjects
 * @property int|null $numDistinctPredicates
 * @property int|null $numQuads
 * @property int|null $numClasses
 * @property list<string>|null $classes
 * @property list<array<string, int>>|null $predicates
 * @property list<SubjectStructure>|null $subjectStructures
 */
class RDFGraphSummary extends Shape
{
    /**
     * @param array{
     *     numDistinctSubjects?: int|null,
     *     numDistinctPredicates?: int|null,
     *     numQuads?: int|null,
     *     numClasses?: int|null,
     *     classes?: list<string>|null,
     *     predicates?: list<array<string, int>>|null,
     *     subjectStructures?: list<SubjectStructure>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
