<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property list<string> $idFieldNames
 * @property ErrorHandlingConfig $errorHandlingConfig
 * @property 'INSERT'|'UPSERT'|'UPDATE'|'DELETE' $writeOperationType
 */
class ZendeskDestinationProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     idFieldNames?: list<string>,
     *     errorHandlingConfig?: ErrorHandlingConfig,
     *     writeOperationType?: 'INSERT'|'UPSERT'|'UPDATE'|'DELETE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
