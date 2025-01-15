<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $eq
 * @property int|null $gt
 * @property int|null $gte
 * @property int|null $lt
 * @property int|null $lte
 * @property list<string>|null $neq
 * @property string|null $prefix
 */
class BucketCriteriaAdditionalProperties extends Shape
{
    /**
     * @param array{
     *     eq?: list<string>|null,
     *     gt?: int|null,
     *     gte?: int|null,
     *     lt?: int|null,
     *     lte?: int|null,
     *     neq?: list<string>|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
