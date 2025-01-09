<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property list<string> $AssetIdFilter
 * @property list<string> $InstanceTypeFilter
 * @property list<string> $AccountIdFilter
 * @property list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'> $AwsServiceFilter
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListAssetInstancesRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     AssetIdFilter?: list<string>,
     *     InstanceTypeFilter?: list<string>,
     *     AccountIdFilter?: list<string>,
     *     AwsServiceFilter?: list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'>,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
