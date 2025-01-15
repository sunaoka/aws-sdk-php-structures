<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isCreatable
 * @property bool|null $isNullable
 * @property bool|null $isUpsertable
 * @property bool|null $isUpdatable
 * @property bool|null $isDefaultedOnCreate
 * @property list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'>|null $supportedWriteOperations
 */
class DestinationFieldProperties extends Shape
{
    /**
     * @param array{
     *     isCreatable?: bool|null,
     *     isNullable?: bool|null,
     *     isUpsertable?: bool|null,
     *     isUpdatable?: bool|null,
     *     isDefaultedOnCreate?: bool|null,
     *     supportedWriteOperations?: list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
