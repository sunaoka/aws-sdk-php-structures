<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityName
 * @property ErrorHandlingConfig $errorHandlingConfig
 * @property 'INSERT'|'UPSERT'|'UPDATE'|'DELETE' $writeOperationType
 * @property list<string> $idFieldNames
 * @property array<string, string> $customProperties
 */
class CustomConnectorDestinationProperties extends Shape
{
    /**
     * @param array{
     *     entityName: string,
     *     errorHandlingConfig?: ErrorHandlingConfig,
     *     writeOperationType?: 'INSERT'|'UPSERT'|'UPDATE'|'DELETE',
     *     idFieldNames?: list<string>,
     *     customProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
