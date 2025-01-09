<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eq
 * @property int $gt
 * @property int $gte
 * @property int $lt
 * @property int $lte
 * @property list<string> $neq
 * @property string $prefix
 */
class BucketCriteriaAdditionalProperties extends Shape
{
    /**
     * @param array{
     *     eq?: list<string>,
     *     gt?: int,
     *     gte?: int,
     *     lt?: int,
     *     lte?: int,
     *     neq?: list<string>,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
