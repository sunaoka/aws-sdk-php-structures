<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteAwsLogSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accounts
 * @property list<string> $regions
 * @property 'ROUTE53'|'VPC_FLOW'|'SH_FINDINGS'|'CLOUD_TRAIL_MGMT'|'LAMBDA_EXECUTION'|'S3_DATA' $sourceName
 * @property string|null $sourceVersion
 */
class AwsLogSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     accounts?: list<string>|null,
     *     regions: list<string>,
     *     sourceName: 'ROUTE53'|'VPC_FLOW'|'SH_FINDINGS'|'CLOUD_TRAIL_MGMT'|'LAMBDA_EXECUTION'|'S3_DATA',
     *     sourceVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
