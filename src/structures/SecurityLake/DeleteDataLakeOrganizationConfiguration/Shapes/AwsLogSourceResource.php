<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteDataLakeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROUTE53'|'VPC_FLOW'|'SH_FINDINGS'|'CLOUD_TRAIL_MGMT'|'LAMBDA_EXECUTION'|'S3_DATA'|'EKS_AUDIT'|'WAF' $sourceName
 * @property string $sourceVersion
 */
class AwsLogSourceResource extends Shape
{
    /**
     * @param array{
     *     sourceName?: 'ROUTE53'|'VPC_FLOW'|'SH_FINDINGS'|'CLOUD_TRAIL_MGMT'|'LAMBDA_EXECUTION'|'S3_DATA'|'EKS_AUDIT'|'WAF',
     *     sourceVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
