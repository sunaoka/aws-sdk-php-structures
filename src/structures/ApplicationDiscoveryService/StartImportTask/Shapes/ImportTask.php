<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $importTaskId
 * @property string|null $clientRequestToken
 * @property string|null $name
 * @property string|null $importUrl
 * @property 'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_COMPLETE_WITH_ERRORS'|'IMPORT_FAILED'|'IMPORT_FAILED_SERVER_LIMIT_EXCEEDED'|'IMPORT_FAILED_RECORD_LIMIT_EXCEEDED'|'IMPORT_FAILED_UNSUPPORTED_FILE_TYPE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_FAILED_LIMIT_EXCEEDED'|'INTERNAL_ERROR'|null $status
 * @property \Aws\Api\DateTimeResult|null $importRequestTime
 * @property \Aws\Api\DateTimeResult|null $importCompletionTime
 * @property \Aws\Api\DateTimeResult|null $importDeletedTime
 * @property 'MODELIZEIT_EXPORT'|'RVTOOLS_EXPORT'|'VMWARE_NSX_EXPORT'|'IMPORT_TEMPLATE'|null $fileClassification
 * @property int|null $serverImportSuccess
 * @property int|null $serverImportFailure
 * @property int|null $applicationImportSuccess
 * @property int|null $applicationImportFailure
 * @property string|null $errorsAndFailedEntriesZip
 */
class ImportTask extends Shape
{
    /**
     * @param array{
     *     importTaskId?: string|null,
     *     clientRequestToken?: string|null,
     *     name?: string|null,
     *     importUrl?: string|null,
     *     status?: 'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_COMPLETE_WITH_ERRORS'|'IMPORT_FAILED'|'IMPORT_FAILED_SERVER_LIMIT_EXCEEDED'|'IMPORT_FAILED_RECORD_LIMIT_EXCEEDED'|'IMPORT_FAILED_UNSUPPORTED_FILE_TYPE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_FAILED_LIMIT_EXCEEDED'|'INTERNAL_ERROR'|null,
     *     importRequestTime?: \Aws\Api\DateTimeResult|null,
     *     importCompletionTime?: \Aws\Api\DateTimeResult|null,
     *     importDeletedTime?: \Aws\Api\DateTimeResult|null,
     *     fileClassification?: 'MODELIZEIT_EXPORT'|'RVTOOLS_EXPORT'|'VMWARE_NSX_EXPORT'|'IMPORT_TEMPLATE'|null,
     *     serverImportSuccess?: int|null,
     *     serverImportFailure?: int|null,
     *     applicationImportSuccess?: int|null,
     *     applicationImportFailure?: int|null,
     *     errorsAndFailedEntriesZip?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
