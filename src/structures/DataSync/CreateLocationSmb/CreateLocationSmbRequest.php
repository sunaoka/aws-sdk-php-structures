<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationSmb;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property string $ServerHostname
 * @property string|null $User
 * @property string|null $Domain
 * @property string|null $Password
 * @property list<string> $AgentArns
 * @property Shapes\SmbMountOptions|null $MountOptions
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property 'NTLM'|'KERBEROS'|null $AuthenticationType
 * @property list<string>|null $DnsIpAddresses
 * @property string|null $KerberosPrincipal
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKeytab
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKrb5Conf
 */
class CreateLocationSmbRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory: string,
     *     ServerHostname: string,
     *     User?: string|null,
     *     Domain?: string|null,
     *     Password?: string|null,
     *     AgentArns: list<string>,
     *     MountOptions?: Shapes\SmbMountOptions|null,
     *     Tags?: list<Shapes\TagListEntry>|null,
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
