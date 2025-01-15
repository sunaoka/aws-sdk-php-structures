<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetGraphMemberDatasources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $GraphArn
 * @property array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection>>|null $DatasourcePackageIngestHistory
 */
class MembershipDatasources extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     GraphArn?: string|null,
     *     DatasourcePackageIngestHistory?: array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
