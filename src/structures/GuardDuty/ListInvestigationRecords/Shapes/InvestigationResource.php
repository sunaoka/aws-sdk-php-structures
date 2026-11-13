<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property string|null $Name
 * @property 'EC2_INSTANCE'|'EBS_VOLUME'|'S3_BUCKET'|'IAM_ROLE'|'IAM_USER'|'IAM_ACCESS_KEY'|'LAMBDA_FUNCTION'|'EKS_CLUSTER'|'ECS_CLUSTER'|'KUBERNETES_WORKLOAD'|'RDS_INSTANCE'|'RDS_DB_USER'|'EC2_SECURITY_GROUP' $ResourceType
 * @property InvestigationResourceData|null $Data
 */
class InvestigationResource extends Shape
{
    /**
     * @param array{
     *     Uid: string,
     *     Name?: string|null,
     *     ResourceType: 'EC2_INSTANCE'|'EBS_VOLUME'|'S3_BUCKET'|'IAM_ROLE'|'IAM_USER'|'IAM_ACCESS_KEY'|'LAMBDA_FUNCTION'|'EKS_CLUSTER'|'ECS_CLUSTER'|'KUBERNETES_WORKLOAD'|'RDS_INSTANCE'|'RDS_DB_USER'|'EC2_SECURITY_GROUP',
     *     Data?: InvestigationResourceData|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
