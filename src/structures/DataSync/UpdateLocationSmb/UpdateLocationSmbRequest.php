<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationSmb;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property string|null $ServerHostname
 * @property string|null $User
 * @property string|null $Domain
 * @property string|null $Password
 * @property list<string>|null $AgentArns
 * @property Shapes\SmbMountOptions|null $MountOptions
 * @property 'NTLM'|'KERBEROS'|null $AuthenticationType
 * @property list<string>|null $DnsIpAddresses
 * @property string|null $KerberosPrincipal
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKeytab
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKrb5Conf
 */
class UpdateLocationSmbRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     ServerHostname?: string|null,
     *     User?: string|null,
     *     Domain?: string|null,
     *     Password?: string|null,
     *     AgentArns?: list<string>|null,
     *     MountOptions?: Shapes\SmbMountOptions|null,
     *     AuthenticationType?: 'NTLM'|'KERBEROS'|null,
     *     DnsIpAddresses?: list<string>|null,
     *     KerberosPrincipal?: string|null,
     *     KerberosKeytab?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     KerberosKrb5Conf?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
