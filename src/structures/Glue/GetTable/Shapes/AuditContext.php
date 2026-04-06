<?php

namespace Sunaoka\Aws\Structures\Glue\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdditionalAuditContext
 * @property list<string>|null $RequestedColumns
 * @property bool|null $AllColumnsRequested
 */
class AuditContext extends Shape
{
    /**
     * @param array{
     *     AdditionalAuditContext?: string|null,
     *     RequestedColumns?: list<string>|null,
     *     AllColumnsRequested?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
