<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<200, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class GetVpnConnectionDeviceTypesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<200, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
