<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'INTERNAL_ERROR'|'INVALID_PERMISSIONS'|'NO_FINDINGS_FOUND'|'BUCKET_NOT_FOUND'|'INCOMPATIBLE_BUCKET_REGION'|'MALFORMED_KMS_KEY' $errorCode
 * @property string $errorMessage
 * @property Shapes\ResourceFilterCriteria $filterCriteria
 * @property 'CYCLONEDX_1_4'|'SPDX_2_3' $format
 * @property string $reportId
 * @property Shapes\Destination $s3Destination
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'CANCELLED'|'FAILED' $status
 */
class GetSbomExportResponse extends Response
{
}
