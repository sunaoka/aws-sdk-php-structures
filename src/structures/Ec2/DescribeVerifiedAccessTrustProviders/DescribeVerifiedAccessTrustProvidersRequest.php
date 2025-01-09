<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessTrustProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VerifiedAccessTrustProviderIds
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeVerifiedAccessTrustProvidersRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
