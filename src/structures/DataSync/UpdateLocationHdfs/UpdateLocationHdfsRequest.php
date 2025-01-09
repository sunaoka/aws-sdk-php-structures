<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationHdfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 * @property list<Shapes\HdfsNameNode> $NameNodes
 * @property int $BlockSize
 * @property int $ReplicationFactor
 * @property string $KmsKeyProviderUri
 * @property Shapes\QopConfiguration $QopConfiguration
 * @property 'SIMPLE'|'KERBEROS' $AuthenticationType
 * @property string $SimpleUser
 * @property string $KerberosPrincipal
 * @property string $KerberosKeytab
 * @property string $KerberosKrb5Conf
 * @property list<string> $AgentArns
 */
class UpdateLocationHdfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string,
     *     NameNodes?: list<Shapes\HdfsNameNode>,
     *     BlockSize?: int,
     *     ReplicationFactor?: int,
     *     KmsKeyProviderUri?: string,
     *     QopConfiguration?: Shapes\QopConfiguration,
     *     AuthenticationType?: 'SIMPLE'|'KERBEROS',
     *     SimpleUser?: string,
     *     KerberosPrincipal?: string,
     *     KerberosKeytab?: string,
     *     KerberosKrb5Conf?: string,
     *     AgentArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
