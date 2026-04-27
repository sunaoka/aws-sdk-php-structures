<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $PartitionValues
 * @property Shapes\AuditContext|null $AuditContext
 */
class GetPartitionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     PartitionValues: list<string>,
     *     AuditContext?: Shapes\AuditContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
