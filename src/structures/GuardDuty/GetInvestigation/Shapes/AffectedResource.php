<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property 'EC2_INSTANCE'|'EBS_VOLUME'|'S3_BUCKET'|'IAM_ROLE'|'IAM_USER'|'IAM_ACCESS_KEY'|'LAMBDA_FUNCTION'|'EKS_CLUSTER'|'ECS_CLUSTER'|'KUBERNETES_WORKLOAD'|'RDS_INSTANCE'|'RDS_DB_USER'|'EC2_SECURITY_GROUP'|null $Type
 * @property string|null $Arn
 */
class AffectedResource extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     Type?: 'EC2_INSTANCE'|'EBS_VOLUME'|'S3_BUCKET'|'IAM_ROLE'|'IAM_USER'|'IAM_ACCESS_KEY'|'LAMBDA_FUNCTION'|'EKS_CLUSTER'|'ECS_CLUSTER'|'KUBERNETES_WORKLOAD'|'RDS_INSTANCE'|'RDS_DB_USER'|'EC2_SECURITY_GROUP'|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
