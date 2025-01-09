<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterAttribute $equals
 * @property FilterAttribute $notEquals
 * @property FilterAttribute $greaterThan
 * @property FilterAttribute $greaterThanOrEquals
 * @property FilterAttribute $lessThan
 * @property FilterAttribute $lessThanOrEquals
 * @property FilterAttribute $in
 * @property FilterAttribute $notIn
 * @property FilterAttribute $startsWith
 * @property FilterAttribute $listContains
 * @property FilterAttribute $stringContains
 * @property list<RetrievalFilter> $andAll
 * @property list<RetrievalFilter> $orAll
 */
class RetrievalFilter extends Shape
{
    /**
     * @param array{
     *     equals?: FilterAttribute,
     *     notEquals?: FilterAttribute,
     *     greaterThan?: FilterAttribute,
     *     greaterThanOrEquals?: FilterAttribute,
     *     lessThan?: FilterAttribute,
     *     lessThanOrEquals?: FilterAttribute,
     *     in?: FilterAttribute,
     *     notIn?: FilterAttribute,
     *     startsWith?: FilterAttribute,
     *     listContains?: FilterAttribute,
     *     stringContains?: FilterAttribute,
     *     andAll?: list<RetrievalFilter>,
     *     orAll?: list<RetrievalFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
