<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetFindingsReportStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Destination|null $destination
 * @property 'INTERNAL_ERROR'|'INVALID_PERMISSIONS'|'NO_FINDINGS_FOUND'|'BUCKET_NOT_FOUND'|'INCOMPATIBLE_BUCKET_REGION'|'MALFORMED_KMS_KEY'|null $errorCode
 * @property string|null $errorMessage
 * @property Shapes\FilterCriteria|null $filterCriteria
 * @property string|null $reportId
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'CANCELLED'|'FAILED'|null $status
 */
class GetFindingsReportStatusResponse extends Response
{
}
