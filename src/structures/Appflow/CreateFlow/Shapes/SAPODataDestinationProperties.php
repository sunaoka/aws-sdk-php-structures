<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $objectPath
 * @property SuccessResponseHandlingConfig|null $successResponseHandlingConfig
 * @property list<string>|null $idFieldNames
 * @property ErrorHandlingConfig|null $errorHandlingConfig
 * @property 'INSERT'|'UPSERT'|'UPDATE'|'DELETE'|null $writeOperationType
 */
class SAPODataDestinationProperties extends Shape
{
    /**
     * @param array{
     *     objectPath: string,
     *     successResponseHandlingConfig?: SuccessResponseHandlingConfig|null,
     *     idFieldNames?: list<string>|null,
     *     errorHandlingConfig?: ErrorHandlingConfig|null,
     *     writeOperationType?: 'INSERT'|'UPSERT'|'UPDATE'|'DELETE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
