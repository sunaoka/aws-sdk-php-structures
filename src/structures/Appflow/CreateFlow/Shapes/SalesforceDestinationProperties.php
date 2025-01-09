<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property list<string> $idFieldNames
 * @property ErrorHandlingConfig $errorHandlingConfig
 * @property 'INSERT'|'UPSERT'|'UPDATE'|'DELETE' $writeOperationType
 * @property 'AUTOMATIC'|'BULKV2'|'REST_SYNC' $dataTransferApi
 */
class SalesforceDestinationProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     idFieldNames?: list<string>,
     *     errorHandlingConfig?: ErrorHandlingConfig,
     *     writeOperationType?: 'INSERT'|'UPSERT'|'UPDATE'|'DELETE',
     *     dataTransferApi?: 'AUTOMATIC'|'BULKV2'|'REST_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
