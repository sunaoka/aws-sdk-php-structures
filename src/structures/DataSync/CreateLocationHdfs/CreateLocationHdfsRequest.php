<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationHdfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property list<Shapes\HdfsNameNode> $NameNodes
 * @property int<1048576, 1073741824> $BlockSize
 * @property int<1, 512> $ReplicationFactor
 * @property string $KmsKeyProviderUri
 * @property Shapes\QopConfiguration $QopConfiguration
 * @property 'SIMPLE'|'KERBEROS' $AuthenticationType
 * @property string $SimpleUser
 * @property string $KerberosPrincipal
 * @property string $KerberosKeytab
 * @property string $KerberosKrb5Conf
 * @property list<string> $AgentArns
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationHdfsRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string,
     *     NameNodes: list<Shapes\HdfsNameNode>,
     *     BlockSize?: int<1048576, 1073741824>,
     *     ReplicationFactor?: int<1, 512>,
     *     KmsKeyProviderUri?: string,
     *     QopConfiguration?: Shapes\QopConfiguration,
     *     AuthenticationType: 'SIMPLE'|'KERBEROS',
     *     SimpleUser?: string,
     *     KerberosPrincipal?: string,
     *     KerberosKeytab?: string,
     *     KerberosKrb5Conf?: string,
     *     AgentArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
