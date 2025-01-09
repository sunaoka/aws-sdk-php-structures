<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetVpnConnectionDeviceTypesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
