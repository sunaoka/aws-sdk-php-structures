<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateFindingsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $eq
 * @property list<string>|null $eqExactMatch
 * @property int|null $gt
 * @property int|null $gte
 * @property int|null $lt
 * @property int|null $lte
 * @property list<string>|null $neq
 */
class CriterionAdditionalProperties extends Shape
{
    /**
     * @param array{
     *     eq?: list<string>|null,
     *     eqExactMatch?: list<string>|null,
     *     gt?: int|null,
     *     gte?: int|null,
     *     lt?: int|null,
     *     lte?: int|null,
     *     neq?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
