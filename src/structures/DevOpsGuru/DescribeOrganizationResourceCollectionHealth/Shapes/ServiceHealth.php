<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_GATEWAY'|'APPLICATION_ELB'|'AUTO_SCALING_GROUP'|'CLOUD_FRONT'|'DYNAMO_DB'|'EC2'|'ECS'|'EKS'|'ELASTIC_BEANSTALK'|'ELASTI_CACHE'|'ELB'|'ES'|'KINESIS'|'LAMBDA'|'NAT_GATEWAY'|'NETWORK_ELB'|'RDS'|'REDSHIFT'|'ROUTE_53'|'S3'|'SAGE_MAKER'|'SNS'|'SQS'|'STEP_FUNCTIONS'|'SWF'|null $ServiceName
 * @property ServiceInsightHealth|null $Insight
 * @property int|null $AnalyzedResourceCount
 */
class ServiceHealth extends Shape
{
    /**
     * @param array{
     *     ServiceName?: 'API_GATEWAY'|'APPLICATION_ELB'|'AUTO_SCALING_GROUP'|'CLOUD_FRONT'|'DYNAMO_DB'|'EC2'|'ECS'|'EKS'|'ELASTIC_BEANSTALK'|'ELASTI_CACHE'|'ELB'|'ES'|'KINESIS'|'LAMBDA'|'NAT_GATEWAY'|'NETWORK_ELB'|'RDS'|'REDSHIFT'|'ROUTE_53'|'S3'|'SAGE_MAKER'|'SNS'|'SQS'|'STEP_FUNCTIONS'|'SWF'|null,
     *     Insight?: ServiceInsightHealth|null,
     *     AnalyzedResourceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
