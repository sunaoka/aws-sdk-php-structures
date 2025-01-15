<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityName
 * @property ErrorHandlingConfig|null $errorHandlingConfig
 * @property 'INSERT'|'UPSERT'|'UPDATE'|'DELETE'|null $writeOperationType
 * @property list<string>|null $idFieldNames
 * @property array<string, string>|null $customProperties
 */
class CustomConnectorDestinationProperties extends Shape
{
    /**
     * @param array{
     *     entityName: string,
     *     errorHandlingConfig?: ErrorHandlingConfig|null,
     *     writeOperationType?: 'INSERT'|'UPSERT'|'UPDATE'|'DELETE'|null,
     *     idFieldNames?: list<string>|null,
     *     customProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
