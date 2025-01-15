<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property list<string>|null $AssetIdFilter
 * @property list<string>|null $InstanceTypeFilter
 * @property list<string>|null $AccountIdFilter
 * @property list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'>|null $AwsServiceFilter
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssetInstancesRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     AssetIdFilter?: list<string>|null,
     *     InstanceTypeFilter?: list<string>|null,
     *     AccountIdFilter?: list<string>|null,
     *     AwsServiceFilter?: list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
