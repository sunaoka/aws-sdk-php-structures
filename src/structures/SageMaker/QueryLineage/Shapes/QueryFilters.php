<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Types
 * @property list<'TrialComponent'|'Artifact'|'Context'|'Action'>|null $LineageTypes
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $ModifiedBefore
 * @property \Aws\Api\DateTimeResult|null $ModifiedAfter
 * @property array<string, string>|null $Properties
 */
class QueryFilters extends Shape
{
    /**
     * @param array{
     *     Types?: list<string>|null,
     *     LineageTypes?: list<'TrialComponent'|'Artifact'|'Context'|'Action'>|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     ModifiedBefore?: \Aws\Api\DateTimeResult|null,
     *     ModifiedAfter?: \Aws\Api\DateTimeResult|null,
     *     Properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
