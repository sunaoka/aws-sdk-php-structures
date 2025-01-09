<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isCreatable
 * @property bool $isNullable
 * @property bool $isUpsertable
 * @property bool $isUpdatable
 * @property bool $isDefaultedOnCreate
 * @property list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'> $supportedWriteOperations
 */
class DestinationFieldProperties extends Shape
{
    /**
     * @param array{
     *     isCreatable?: bool,
     *     isNullable?: bool,
     *     isUpsertable?: bool,
     *     isUpdatable?: bool,
     *     isDefaultedOnCreate?: bool,
     *     supportedWriteOperations?: list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
