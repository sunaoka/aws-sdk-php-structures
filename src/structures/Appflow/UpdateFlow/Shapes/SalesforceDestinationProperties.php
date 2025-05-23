<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property list<string>|null $idFieldNames
 * @property ErrorHandlingConfig|null $errorHandlingConfig
 * @property 'INSERT'|'UPSERT'|'UPDATE'|'DELETE'|null $writeOperationType
 * @property 'AUTOMATIC'|'BULKV2'|'REST_SYNC'|null $dataTransferApi
 */
class SalesforceDestinationProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     idFieldNames?: list<string>|null,
     *     errorHandlingConfig?: ErrorHandlingConfig|null,
     *     writeOperationType?: 'INSERT'|'UPSERT'|'UPDATE'|'DELETE'|null,
     *     dataTransferApi?: 'AUTOMATIC'|'BULKV2'|'REST_SYNC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
