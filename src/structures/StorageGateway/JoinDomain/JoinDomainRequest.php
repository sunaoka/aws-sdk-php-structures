<?php

namespace Sunaoka\Aws\Structures\StorageGateway\JoinDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $DomainName
 * @property string $OrganizationalUnit
 * @property list<string> $DomainControllers
 * @property int<0, 3600> $TimeoutInSeconds
 * @property string $UserName
 * @property string $Password
 */
class JoinDomainRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     DomainName: string,
     *     OrganizationalUnit?: string,
     *     DomainControllers?: list<string>,
     *     TimeoutInSeconds?: int<0, 3600>,
     *     UserName: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
