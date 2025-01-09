<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $objectPath
 * @property SuccessResponseHandlingConfig $successResponseHandlingConfig
 * @property list<string> $idFieldNames
 * @property ErrorHandlingConfig $errorHandlingConfig
 * @property 'INSERT'|'UPSERT'|'UPDATE'|'DELETE' $writeOperationType
 */
class SAPODataDestinationProperties extends Shape
{
    /**
     * @param array{
     *     objectPath: string,
     *     successResponseHandlingConfig?: SuccessResponseHandlingConfig,
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
