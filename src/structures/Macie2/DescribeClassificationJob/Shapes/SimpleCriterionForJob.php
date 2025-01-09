<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH' $comparator
 * @property 'ACCOUNT_ID'|'S3_BUCKET_NAME'|'S3_BUCKET_EFFECTIVE_PERMISSION'|'S3_BUCKET_SHARED_ACCESS' $key
 * @property list<string> $values
 */
class SimpleCriterionForJob extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH',
     *     key?: 'ACCOUNT_ID'|'S3_BUCKET_NAME'|'S3_BUCKET_EFFECTIVE_PERMISSION'|'S3_BUCKET_SHARED_ACCESS',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
