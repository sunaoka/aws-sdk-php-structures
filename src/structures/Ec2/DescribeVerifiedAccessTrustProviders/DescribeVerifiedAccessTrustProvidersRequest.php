<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessTrustProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VerifiedAccessTrustProviderIds
 * @property int<5, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeVerifiedAccessTrustProvidersRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderIds?: list<string>|null,
     *     MaxResults?: int<5, 200>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
