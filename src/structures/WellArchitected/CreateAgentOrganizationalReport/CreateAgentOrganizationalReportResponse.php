<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentOrganizationalReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $reportId
 * @property 'DISCOVERING'|'SNAPSHOTTING'|'AGGREGATING'|'COMPRESSING'|'COMPLETED'|'FAILED'|'DELETING' $state
 */
class CreateAgentOrganizationalReportResponse extends Response
{
}
