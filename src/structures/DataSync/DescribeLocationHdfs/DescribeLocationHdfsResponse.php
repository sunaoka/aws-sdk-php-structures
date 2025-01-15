<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationHdfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property list<Shapes\HdfsNameNode>|null $NameNodes
 * @property int<1048576, 1073741824>|null $BlockSize
 * @property int<1, 512>|null $ReplicationFactor
 * @property string|null $KmsKeyProviderUri
 * @property Shapes\QopConfiguration|null $QopConfiguration
 * @property 'SIMPLE'|'KERBEROS'|null $AuthenticationType
 * @property string|null $SimpleUser
 * @property string|null $KerberosPrincipal
 * @property list<string>|null $AgentArns
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class DescribeLocationHdfsResponse extends Response
{
}
