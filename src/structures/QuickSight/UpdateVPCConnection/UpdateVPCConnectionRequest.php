<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateVPCConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $VPCConnectionId
 * @property string $Name
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property list<string> $DnsResolvers
 * @property string $RoleArn
 */
class UpdateVPCConnectionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     VPCConnectionId: string,
     *     Name: string,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds: list<string>,
     *     DnsResolvers?: list<string>,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
