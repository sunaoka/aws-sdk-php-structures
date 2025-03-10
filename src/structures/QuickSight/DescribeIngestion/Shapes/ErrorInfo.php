<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIngestion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILURE_TO_ASSUME_ROLE'|'INGESTION_SUPERSEDED'|'INGESTION_CANCELED'|'DATA_SET_DELETED'|'DATA_SET_NOT_SPICE'|'S3_UPLOADED_FILE_DELETED'|'S3_MANIFEST_ERROR'|'DATA_TOLERANCE_EXCEPTION'|'SPICE_TABLE_NOT_FOUND'|'DATA_SET_SIZE_LIMIT_EXCEEDED'|'ROW_SIZE_LIMIT_EXCEEDED'|'ACCOUNT_CAPACITY_LIMIT_EXCEEDED'|'CUSTOMER_ERROR'|'DATA_SOURCE_NOT_FOUND'|'IAM_ROLE_NOT_AVAILABLE'|'CONNECTION_FAILURE'|'SQL_TABLE_NOT_FOUND'|'PERMISSION_DENIED'|'SSL_CERTIFICATE_VALIDATION_FAILURE'|'OAUTH_TOKEN_FAILURE'|'SOURCE_API_LIMIT_EXCEEDED_FAILURE'|'PASSWORD_AUTHENTICATION_FAILURE'|'SQL_SCHEMA_MISMATCH_ERROR'|'INVALID_DATE_FORMAT'|'INVALID_DATAPREP_SYNTAX'|'SOURCE_RESOURCE_LIMIT_EXCEEDED'|'SQL_INVALID_PARAMETER_VALUE'|'QUERY_TIMEOUT'|'SQL_NUMERIC_OVERFLOW'|'UNRESOLVABLE_HOST'|'UNROUTABLE_HOST'|'SQL_EXCEPTION'|'S3_FILE_INACCESSIBLE'|'IOT_FILE_NOT_FOUND'|'IOT_DATA_SET_FILE_EMPTY'|'INVALID_DATA_SOURCE_CONFIG'|'DATA_SOURCE_AUTH_FAILED'|'DATA_SOURCE_CONNECTION_FAILED'|'FAILURE_TO_PROCESS_JSON_FILE'|'INTERNAL_SERVICE_ERROR'|'REFRESH_SUPPRESSED_BY_EDIT'|'PERMISSION_NOT_FOUND'|'ELASTICSEARCH_CURSOR_NOT_ENABLED'|'CURSOR_NOT_ENABLED'|'DUPLICATE_COLUMN_NAMES_FOUND'|null $Type
 * @property string|null $Message
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'FAILURE_TO_ASSUME_ROLE'|'INGESTION_SUPERSEDED'|'INGESTION_CANCELED'|'DATA_SET_DELETED'|'DATA_SET_NOT_SPICE'|'S3_UPLOADED_FILE_DELETED'|'S3_MANIFEST_ERROR'|'DATA_TOLERANCE_EXCEPTION'|'SPICE_TABLE_NOT_FOUND'|'DATA_SET_SIZE_LIMIT_EXCEEDED'|'ROW_SIZE_LIMIT_EXCEEDED'|'ACCOUNT_CAPACITY_LIMIT_EXCEEDED'|'CUSTOMER_ERROR'|'DATA_SOURCE_NOT_FOUND'|'IAM_ROLE_NOT_AVAILABLE'|'CONNECTION_FAILURE'|'SQL_TABLE_NOT_FOUND'|'PERMISSION_DENIED'|'SSL_CERTIFICATE_VALIDATION_FAILURE'|'OAUTH_TOKEN_FAILURE'|'SOURCE_API_LIMIT_EXCEEDED_FAILURE'|'PASSWORD_AUTHENTICATION_FAILURE'|'SQL_SCHEMA_MISMATCH_ERROR'|'INVALID_DATE_FORMAT'|'INVALID_DATAPREP_SYNTAX'|'SOURCE_RESOURCE_LIMIT_EXCEEDED'|'SQL_INVALID_PARAMETER_VALUE'|'QUERY_TIMEOUT'|'SQL_NUMERIC_OVERFLOW'|'UNRESOLVABLE_HOST'|'UNROUTABLE_HOST'|'SQL_EXCEPTION'|'S3_FILE_INACCESSIBLE'|'IOT_FILE_NOT_FOUND'|'IOT_DATA_SET_FILE_EMPTY'|'INVALID_DATA_SOURCE_CONFIG'|'DATA_SOURCE_AUTH_FAILED'|'DATA_SOURCE_CONNECTION_FAILED'|'FAILURE_TO_PROCESS_JSON_FILE'|'INTERNAL_SERVICE_ERROR'|'REFRESH_SUPPRESSED_BY_EDIT'|'PERMISSION_NOT_FOUND'|'ELASTICSEARCH_CURSOR_NOT_ENABLED'|'CURSOR_NOT_ENABLED'|'DUPLICATE_COLUMN_NAMES_FOUND'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
