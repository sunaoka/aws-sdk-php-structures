<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property bool|null $enableDynamicFieldUpdate
 * @property bool|null $includeDeletedRecords
 * @property 'AUTOMATIC'|'BULKV2'|'REST_SYNC'|null $dataTransferApi
 */
class SalesforceSourceProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     enableDynamicFieldUpdate?: bool|null,
     *     includeDeletedRecords?: bool|null,
     *     dataTransferApi?: 'AUTOMATIC'|'BULKV2'|'REST_SYNC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
