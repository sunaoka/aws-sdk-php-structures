<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationHdfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property list<Shapes\HdfsNameNode>|null $NameNodes
 * @property int<1048576, 1073741824>|null $BlockSize
 * @property int<1, 512>|null $ReplicationFactor
 * @property string|null $KmsKeyProviderUri
 * @property Shapes\QopConfiguration|null $QopConfiguration
 * @property 'SIMPLE'|'KERBEROS'|null $AuthenticationType
 * @property string|null $SimpleUser
 * @property string|null $KerberosPrincipal
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKeytab
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $KerberosKrb5Conf
 * @property list<string>|null $AgentArns
 */
class UpdateLocationHdfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     NameNodes?: list<Shapes\HdfsNameNode>|null,
     *     BlockSize?: int<1048576, 1073741824>|null,
     *     ReplicationFactor?: int<1, 512>|null,
     *     KmsKeyProviderUri?: string|null,
     *     QopConfiguration?: Shapes\QopConfiguration|null,
     *     AuthenticationType?: 'SIMPLE'|'KERBEROS'|null,
     *     SimpleUser?: string|null,
     *     KerberosPrincipal?: string|null,
     *     KerberosKeytab?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     KerberosKrb5Conf?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     AgentArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
