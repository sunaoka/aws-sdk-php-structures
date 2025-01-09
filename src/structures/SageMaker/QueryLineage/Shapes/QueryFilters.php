<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Types
 * @property list<'TrialComponent'|'Artifact'|'Context'|'Action'> $LineageTypes
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $ModifiedBefore
 * @property \Aws\Api\DateTimeResult $ModifiedAfter
 * @property array<string, string> $Properties
 */
class QueryFilters extends Shape
{
    /**
     * @param array{
     *     Types?: list<string>,
     *     LineageTypes?: list<'TrialComponent'|'Artifact'|'Context'|'Action'>,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     ModifiedBefore?: \Aws\Api\DateTimeResult,
     *     ModifiedAfter?: \Aws\Api\DateTimeResult,
     *     Properties?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
