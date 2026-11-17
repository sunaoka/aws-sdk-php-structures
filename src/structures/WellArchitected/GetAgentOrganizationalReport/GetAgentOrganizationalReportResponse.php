<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $reportId
 * @property string $ownerAccountId
 * @property string $organizationId
 * @property string|null $label
 * @property 'DISCOVERING'|'SNAPSHOTTING'|'AGGREGATING'|'COMPRESSING'|'COMPLETED'|'FAILED'|'DELETING' $state
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\OrganizationalReportFilters|null $filters
 * @property Shapes\CoverageSummary|null $coverageSummary
 */
class GetAgentOrganizationalReportResponse extends Response
{
}
