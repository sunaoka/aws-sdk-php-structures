<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RetrievalFilterConfiguration>|null $andAll
 * @property FilterAttribute|null $equals
 * @property FilterAttribute|null $greaterThan
 * @property FilterAttribute|null $greaterThanOrEquals
 * @property FilterAttribute|null $in
 * @property FilterAttribute|null $lessThan
 * @property FilterAttribute|null $lessThanOrEquals
 * @property FilterAttribute|null $listContains
 * @property FilterAttribute|null $notEquals
 * @property FilterAttribute|null $notIn
 * @property list<RetrievalFilterConfiguration>|null $orAll
 * @property FilterAttribute|null $startsWith
 * @property FilterAttribute|null $stringContains
 */
class RetrievalFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     andAll?: list<RetrievalFilterConfiguration>|null,
     *     equals?: FilterAttribute|null,
     *     greaterThan?: FilterAttribute|null,
     *     greaterThanOrEquals?: FilterAttribute|null,
     *     in?: FilterAttribute|null,
     *     lessThan?: FilterAttribute|null,
     *     lessThanOrEquals?: FilterAttribute|null,
     *     listContains?: FilterAttribute|null,
     *     notEquals?: FilterAttribute|null,
     *     notIn?: FilterAttribute|null,
     *     orAll?: list<RetrievalFilterConfiguration>|null,
     *     startsWith?: FilterAttribute|null,
     *     stringContains?: FilterAttribute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
