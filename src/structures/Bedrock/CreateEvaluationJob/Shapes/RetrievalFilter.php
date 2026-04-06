<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterAttribute|null $equals
 * @property FilterAttribute|null $notEquals
 * @property FilterAttribute|null $greaterThan
 * @property FilterAttribute|null $greaterThanOrEquals
 * @property FilterAttribute|null $lessThan
 * @property FilterAttribute|null $lessThanOrEquals
 * @property FilterAttribute|null $in
 * @property FilterAttribute|null $notIn
 * @property FilterAttribute|null $startsWith
 * @property FilterAttribute|null $listContains
 * @property FilterAttribute|null $stringContains
 * @property list<RetrievalFilter>|null $andAll
 * @property list<RetrievalFilter>|null $orAll
 */
class RetrievalFilter extends Shape
{
    /**
     * @param array{
     *     equals?: FilterAttribute|null,
     *     notEquals?: FilterAttribute|null,
     *     greaterThan?: FilterAttribute|null,
     *     greaterThanOrEquals?: FilterAttribute|null,
     *     lessThan?: FilterAttribute|null,
     *     lessThanOrEquals?: FilterAttribute|null,
     *     in?: FilterAttribute|null,
     *     notIn?: FilterAttribute|null,
     *     startsWith?: FilterAttribute|null,
     *     listContains?: FilterAttribute|null,
     *     stringContains?: FilterAttribute|null,
     *     andAll?: list<RetrievalFilter>|null,
     *     orAll?: list<RetrievalFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
