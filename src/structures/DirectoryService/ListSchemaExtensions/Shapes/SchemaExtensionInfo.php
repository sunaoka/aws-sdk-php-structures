<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListSchemaExtensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $SchemaExtensionId
 * @property string|null $Description
 * @property 'Initializing'|'CreatingSnapshot'|'UpdatingSchema'|'Replicating'|'CancelInProgress'|'RollbackInProgress'|'Cancelled'|'Failed'|'Completed'|null $SchemaExtensionStatus
 * @property string|null $SchemaExtensionStatusReason
 * @property \Aws\Api\DateTimeResult|null $StartDateTime
 * @property \Aws\Api\DateTimeResult|null $EndDateTime
 */
class SchemaExtensionInfo extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     SchemaExtensionId?: string|null,
     *     Description?: string|null,
     *     SchemaExtensionStatus?: 'Initializing'|'CreatingSnapshot'|'UpdatingSchema'|'Replicating'|'CancelInProgress'|'RollbackInProgress'|'Cancelled'|'Failed'|'Completed'|null,
     *     SchemaExtensionStatusReason?: string|null,
     *     StartDateTime?: \Aws\Api\DateTimeResult|null,
     *     EndDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
