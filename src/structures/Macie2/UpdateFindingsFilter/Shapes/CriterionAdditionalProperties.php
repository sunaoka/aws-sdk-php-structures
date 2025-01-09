<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateFindingsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eq
 * @property list<string> $eqExactMatch
 * @property int $gt
 * @property int $gte
 * @property int $lt
 * @property int $lte
 * @property list<string> $neq
 */
class CriterionAdditionalProperties extends Shape
{
    /**
     * @param array{
     *     eq?: list<string>,
     *     eqExactMatch?: list<string>,
     *     gt?: int,
     *     gte?: int,
     *     lt?: int,
     *     lte?: int,
     *     neq?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
