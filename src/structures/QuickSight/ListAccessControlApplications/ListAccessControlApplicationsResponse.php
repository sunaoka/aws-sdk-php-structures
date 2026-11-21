<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAccessControlApplications;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Status
 * @property string $RequestId
 * @property list<Shapes\AccessControlApplicationSummary> $AccessControlApplications
 * @property string|null $NextToken
 */
class ListAccessControlApplicationsResponse extends Response
{
}
