<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListProgramManagementAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $revision
 * @property string|null $catalog
 * @property 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|null $program
 * @property string|null $displayName
 * @property string|null $accountId
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|null $status
 */
class ProgramManagementAccountSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     revision?: string|null,
     *     catalog?: string|null,
     *     program?: 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|null,
     *     displayName?: string|null,
     *     accountId?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
