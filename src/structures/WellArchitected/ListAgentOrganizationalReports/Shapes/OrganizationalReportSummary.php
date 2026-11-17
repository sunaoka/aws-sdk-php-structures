<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentOrganizationalReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reportId
 * @property string $ownerAccountId
 * @property string $organizationId
 * @property string|null $label
 * @property 'DISCOVERING'|'SNAPSHOTTING'|'AGGREGATING'|'COMPRESSING'|'COMPLETED'|'FAILED'|'DELETING' $state
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class OrganizationalReportSummary extends Shape
{
    /**
     * @param array{
     *     reportId: string,
     *     ownerAccountId: string,
     *     organizationId: string,
     *     label?: string|null,
     *     state: 'DISCOVERING'|'SNAPSHOTTING'|'AGGREGATING'|'COMPRESSING'|'COMPLETED'|'FAILED'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
