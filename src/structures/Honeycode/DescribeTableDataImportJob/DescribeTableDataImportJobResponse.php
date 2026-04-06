<?php

namespace Sunaoka\Aws\Structures\Honeycode\DescribeTableDataImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $jobStatus
 * @property string $message
 * @property Shapes\TableDataImportJobMetadata $jobMetadata
 * @property 'ACCESS_DENIED'|'INVALID_URL_ERROR'|'INVALID_IMPORT_OPTIONS_ERROR'|'INVALID_TABLE_ID_ERROR'|'INVALID_TABLE_COLUMN_ID_ERROR'|'TABLE_NOT_FOUND_ERROR'|'FILE_EMPTY_ERROR'|'INVALID_FILE_TYPE_ERROR'|'FILE_PARSING_ERROR'|'FILE_SIZE_LIMIT_ERROR'|'FILE_NOT_FOUND_ERROR'|'UNKNOWN_ERROR'|'RESOURCE_NOT_FOUND_ERROR'|'SYSTEM_LIMIT_ERROR'|null $errorCode
 */
class DescribeTableDataImportJobResponse extends Response
{
}
