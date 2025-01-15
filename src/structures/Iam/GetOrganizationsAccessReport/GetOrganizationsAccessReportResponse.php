<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $JobCreationDate
 * @property \Aws\Api\DateTimeResult|null $JobCompletionDate
 * @property int|null $NumberOfServicesAccessible
 * @property int|null $NumberOfServicesNotAccessed
 * @property list<Shapes\AccessDetail>|null $AccessDetails
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 * @property Shapes\ErrorDetails|null $ErrorDetails
 */
class GetOrganizationsAccessReportResponse extends Response
{
}
