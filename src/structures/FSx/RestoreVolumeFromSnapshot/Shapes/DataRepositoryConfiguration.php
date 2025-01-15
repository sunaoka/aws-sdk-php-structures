<?php

namespace Sunaoka\Aws\Structures\FSx\RestoreVolumeFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED'|null $Lifecycle
 * @property string|null $ImportPath
 * @property string|null $ExportPath
 * @property int<1, 512000>|null $ImportedFileChunkSize
 * @property 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED'|null $AutoImportPolicy
 * @property DataRepositoryFailureDetails|null $FailureDetails
 */
class DataRepositoryConfiguration extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     ImportPath?: string|null,
     *     ExportPath?: string|null,
     *     ImportedFileChunkSize?: int<1, 512000>|null,
     *     AutoImportPolicy?: 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED'|null,
     *     FailureDetails?: DataRepositoryFailureDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
