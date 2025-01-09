<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $importTaskId
 * @property string $clientRequestToken
 * @property string $name
 * @property string $importUrl
 * @property 'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_COMPLETE_WITH_ERRORS'|'IMPORT_FAILED'|'IMPORT_FAILED_SERVER_LIMIT_EXCEEDED'|'IMPORT_FAILED_RECORD_LIMIT_EXCEEDED'|'IMPORT_FAILED_UNSUPPORTED_FILE_TYPE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_FAILED_LIMIT_EXCEEDED'|'INTERNAL_ERROR' $status
 * @property \Aws\Api\DateTimeResult $importRequestTime
 * @property \Aws\Api\DateTimeResult $importCompletionTime
 * @property \Aws\Api\DateTimeResult $importDeletedTime
 * @property 'MODELIZEIT_EXPORT'|'RVTOOLS_EXPORT'|'VMWARE_NSX_EXPORT'|'IMPORT_TEMPLATE' $fileClassification
 * @property int $serverImportSuccess
 * @property int $serverImportFailure
 * @property int $applicationImportSuccess
 * @property int $applicationImportFailure
 * @property string $errorsAndFailedEntriesZip
 */
class ImportTask extends Shape
{
    /**
     * @param array{
     *     importTaskId?: string,
     *     clientRequestToken?: string,
     *     name?: string,
     *     importUrl?: string,
     *     status?: 'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_COMPLETE_WITH_ERRORS'|'IMPORT_FAILED'|'IMPORT_FAILED_SERVER_LIMIT_EXCEEDED'|'IMPORT_FAILED_RECORD_LIMIT_EXCEEDED'|'IMPORT_FAILED_UNSUPPORTED_FILE_TYPE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_FAILED_LIMIT_EXCEEDED'|'INTERNAL_ERROR',
     *     importRequestTime?: \Aws\Api\DateTimeResult,
     *     importCompletionTime?: \Aws\Api\DateTimeResult,
     *     importDeletedTime?: \Aws\Api\DateTimeResult,
     *     fileClassification?: 'MODELIZEIT_EXPORT'|'RVTOOLS_EXPORT'|'VMWARE_NSX_EXPORT'|'IMPORT_TEMPLATE',
     *     serverImportSuccess?: int,
     *     serverImportFailure?: int,
     *     applicationImportSuccess?: int,
     *     applicationImportFailure?: int,
     *     errorsAndFailedEntriesZip?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
