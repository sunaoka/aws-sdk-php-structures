<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $AssetId
 * @property string $AccountId
 * @property 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53' $AwsServiceName
 */
class AssetInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     InstanceType?: string,
     *     AssetId?: string,
     *     AccountId?: string,
     *     AwsServiceName?: 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
