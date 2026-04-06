<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationHdfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Subdirectory
 * @property list<Shapes\HdfsNameNode> $NameNodes
 * @property int<1048576, 1073741824>|null $BlockSize
 * @property int<1, 512>|null $ReplicationFactor
 * @property string|null $KmsKeyProviderUri
 * @property Shapes\QopConfiguration|null $QopConfiguration
 * @property 'SIMPLE'|'KERBEROS' $AuthenticationType
 * @property string|null $SimpleUser
 * @property string|null $KerberosPrincipal
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKeytab
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKrb5Conf
 * @property list<string> $AgentArns
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class CreateLocationHdfsRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string|null,
     *     NameNodes: list<Shapes\HdfsNameNode>,
     *     BlockSize?: int<1048576, 1073741824>|null,
     *     ReplicationFactor?: int<1, 512>|null,
     *     KmsKeyProviderUri?: string|null,
     *     QopConfiguration?: Shapes\QopConfiguration|null,
     *     AuthenticationType: 'SIMPLE'|'KERBEROS',
     *     SimpleUser?: string|null,
     *     KerberosPrincipal?: string|null,
     *     KerberosKeytab?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     KerberosKrb5Conf?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     AgentArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
