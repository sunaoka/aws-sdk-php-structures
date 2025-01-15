<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateVPCConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $VPCConnectionId
 * @property string $Name
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property list<string>|null $DnsResolvers
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateVPCConnectionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     VPCConnectionId: string,
     *     Name: string,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds: list<string>,
     *     DnsResolvers?: list<string>|null,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
