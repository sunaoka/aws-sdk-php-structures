<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateAwsLogSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $accounts
 * @property list<string> $regions
 * @property 'ROUTE53'|'VPC_FLOW'|'SH_FINDINGS'|'CLOUD_TRAIL_MGMT'|'LAMBDA_EXECUTION'|'S3_DATA'|'EKS_AUDIT'|'WAF' $sourceName
 * @property string $sourceVersion
 */
class AwsLogSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     accounts?: list<string>,
     *     regions: list<string>,
     *     sourceName: 'ROUTE53'|'VPC_FLOW'|'SH_FINDINGS'|'CLOUD_TRAIL_MGMT'|'LAMBDA_EXECUTION'|'S3_DATA'|'EKS_AUDIT'|'WAF',
     *     sourceVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
