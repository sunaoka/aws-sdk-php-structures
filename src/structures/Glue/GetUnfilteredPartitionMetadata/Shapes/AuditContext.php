<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdditionalAuditContext
 * @property list<string> $RequestedColumns
 * @property bool $AllColumnsRequested
 */
class AuditContext extends Shape
{
    /**
     * @param array{
     *     AdditionalAuditContext?: string,
     *     RequestedColumns?: list<string>,
     *     AllColumnsRequested?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
