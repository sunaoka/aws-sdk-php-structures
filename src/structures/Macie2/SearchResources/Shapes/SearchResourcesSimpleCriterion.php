<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'NE'|null $comparator
 * @property 'ACCOUNT_ID'|'S3_BUCKET_NAME'|'S3_BUCKET_EFFECTIVE_PERMISSION'|'S3_BUCKET_SHARED_ACCESS'|'AUTOMATED_DISCOVERY_MONITORING_STATUS'|null $key
 * @property list<string>|null $values
 */
class SearchResourcesSimpleCriterion extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'NE'|null,
     *     key?: 'ACCOUNT_ID'|'S3_BUCKET_NAME'|'S3_BUCKET_EFFECTIVE_PERMISSION'|'S3_BUCKET_SHARED_ACCESS'|'AUTOMATED_DISCOVERY_MONITORING_STATUS'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
