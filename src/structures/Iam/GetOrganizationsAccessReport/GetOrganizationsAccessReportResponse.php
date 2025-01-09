<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $JobCreationDate
 * @property \Aws\Api\DateTimeResult $JobCompletionDate
 * @property int $NumberOfServicesAccessible
 * @property int $NumberOfServicesNotAccessed
 * @property list<Shapes\AccessDetail> $AccessDetails
 * @property bool $IsTruncated
 * @property string $Marker
 * @property Shapes\ErrorDetails $ErrorDetails
 */
class GetOrganizationsAccessReportResponse extends Response
{
}
