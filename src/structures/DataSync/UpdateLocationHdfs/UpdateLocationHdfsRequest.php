<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationHdfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 * @property list<Shapes\HdfsNameNode> $NameNodes
 * @property int<1048576, 1073741824> $BlockSize
 * @property int<1, 512> $ReplicationFactor
 * @property string $KmsKeyProviderUri
 * @property Shapes\QopConfiguration $QopConfiguration
 * @property 'SIMPLE'|'KERBEROS' $AuthenticationType
 * @property string $SimpleUser
 * @property string $KerberosPrincipal
 * @property string|resource|\Psr\Http\Message\StreamInterface $KerberosKeytab
 * @property string|resource|\Psr\Http\Message\StreamInterface $KerberosKrb5Conf
 * @property list<string> $AgentArns
 */
class UpdateLocationHdfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string,
     *     NameNodes?: list<Shapes\HdfsNameNode>,
     *     BlockSize?: int<1048576, 1073741824>,
     *     ReplicationFactor?: int<1, 512>,
     *     KmsKeyProviderUri?: string,
     *     QopConfiguration?: Shapes\QopConfiguration,
     *     AuthenticationType?: 'SIMPLE'|'KERBEROS',
     *     SimpleUser?: string,
     *     KerberosPrincipal?: string,
     *     KerberosKeytab?: string|resource|\Psr\Http\Message\StreamInterface,
     *     KerberosKrb5Conf?: string|resource|\Psr\Http\Message\StreamInterface,
     *     AgentArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
