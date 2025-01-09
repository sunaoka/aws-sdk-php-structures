<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetGraphMemberDatasources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $GraphArn
 * @property array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection>> $DatasourcePackageIngestHistory
 */
class MembershipDatasources extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     GraphArn?: string,
     *     DatasourcePackageIngestHistory?: array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
