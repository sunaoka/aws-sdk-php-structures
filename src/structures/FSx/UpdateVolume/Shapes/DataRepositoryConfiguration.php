<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED' $Lifecycle
 * @property string $ImportPath
 * @property string $ExportPath
 * @property int<1, 512000> $ImportedFileChunkSize
 * @property 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED' $AutoImportPolicy
 * @property DataRepositoryFailureDetails $FailureDetails
 */
class DataRepositoryConfiguration extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED',
     *     ImportPath?: string,
     *     ExportPath?: string,
     *     ImportedFileChunkSize?: int<1, 512000>,
     *     AutoImportPolicy?: 'NONE'|'NEW'|'NEW_CHANGED'|'NEW_CHANGED_DELETED',
     *     FailureDetails?: DataRepositoryFailureDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
