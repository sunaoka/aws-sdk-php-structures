<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property bool $enableDynamicFieldUpdate
 * @property bool $includeDeletedRecords
 * @property 'AUTOMATIC'|'BULKV2'|'REST_SYNC' $dataTransferApi
 */
class SalesforceSourceProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     enableDynamicFieldUpdate?: bool,
     *     includeDeletedRecords?: bool,
     *     dataTransferApi?: 'AUTOMATIC'|'BULKV2'|'REST_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
