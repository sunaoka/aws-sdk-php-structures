<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListSchemaExtensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $SchemaExtensionId
 * @property string $Description
 * @property 'Initializing'|'CreatingSnapshot'|'UpdatingSchema'|'Replicating'|'CancelInProgress'|'RollbackInProgress'|'Cancelled'|'Failed'|'Completed' $SchemaExtensionStatus
 * @property string $SchemaExtensionStatusReason
 * @property \Aws\Api\DateTimeResult $StartDateTime
 * @property \Aws\Api\DateTimeResult $EndDateTime
 */
class SchemaExtensionInfo extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     SchemaExtensionId?: string,
     *     Description?: string,
     *     SchemaExtensionStatus?: 'Initializing'|'CreatingSnapshot'|'UpdatingSchema'|'Replicating'|'CancelInProgress'|'RollbackInProgress'|'Cancelled'|'Failed'|'Completed',
     *     SchemaExtensionStatusReason?: string,
     *     StartDateTime?: \Aws\Api\DateTimeResult,
     *     EndDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
