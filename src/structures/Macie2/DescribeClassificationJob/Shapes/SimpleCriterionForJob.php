<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH'|null $comparator
 * @property 'ACCOUNT_ID'|'S3_BUCKET_NAME'|'S3_BUCKET_EFFECTIVE_PERMISSION'|'S3_BUCKET_SHARED_ACCESS'|null $key
 * @property list<string>|null $values
 */
class SimpleCriterionForJob extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH'|null,
     *     key?: 'ACCOUNT_ID'|'S3_BUCKET_NAME'|'S3_BUCKET_EFFECTIVE_PERMISSION'|'S3_BUCKET_SHARED_ACCESS'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
