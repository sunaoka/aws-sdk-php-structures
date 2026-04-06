<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $InstanceType
 * @property string|null $AssetId
 * @property string|null $AccountId
 * @property 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'|null $AwsServiceName
 */
class AssetInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     InstanceType?: string|null,
     *     AssetId?: string|null,
     *     AccountId?: string|null,
     *     AwsServiceName?: 'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
