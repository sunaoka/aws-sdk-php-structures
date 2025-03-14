<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationSmb;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property list<string>|null $AgentArns
 * @property string|null $User
 * @property string|null $Domain
 * @property Shapes\SmbMountOptions|null $MountOptions
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<string>|null $DnsIpAddresses
 * @property string|null $KerberosPrincipal
 * @property 'NTLM'|'KERBEROS'|null $AuthenticationType
 */
class DescribeLocationSmbResponse extends Response
{
}
