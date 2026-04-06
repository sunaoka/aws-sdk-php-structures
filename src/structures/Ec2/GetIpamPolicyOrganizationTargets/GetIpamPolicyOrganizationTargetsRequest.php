<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPolicyOrganizationTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $IpamPolicyId
 * @property list<Shapes\Filter>|null $Filters
 */
class GetIpamPolicyOrganizationTargetsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     IpamPolicyId: string,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
