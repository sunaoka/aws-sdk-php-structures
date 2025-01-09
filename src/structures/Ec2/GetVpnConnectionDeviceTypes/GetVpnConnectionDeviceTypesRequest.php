<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<200, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetVpnConnectionDeviceTypesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<200, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
