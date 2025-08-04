<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $reportId
 * @property 'CYCLONEDX_1_4'|'SPDX_2_3'|null $format
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'CANCELLED'|'FAILED'|null $status
 * @property 'INTERNAL_ERROR'|'INVALID_PERMISSIONS'|'NO_FINDINGS_FOUND'|'BUCKET_NOT_FOUND'|'INCOMPATIBLE_BUCKET_REGION'|'MALFORMED_KMS_KEY'|null $errorCode
 * @property string|null $errorMessage
 * @property Shapes\Destination|null $s3Destination
 * @property Shapes\ResourceFilterCriteria|null $filterCriteria
 */
class GetSbomExportResponse extends Response
{
}
