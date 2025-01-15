<?php

namespace Sunaoka\Aws\Structures\StorageGateway\JoinDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $DomainName
 * @property string|null $OrganizationalUnit
 * @property list<string>|null $DomainControllers
 * @property int<0, 3600>|null $TimeoutInSeconds
 * @property string $UserName
 * @property string $Password
 */
class JoinDomainRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     DomainName: string,
     *     OrganizationalUnit?: string|null,
     *     DomainControllers?: list<string>|null,
     *     TimeoutInSeconds?: int<0, 3600>|null,
     *     UserName: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
