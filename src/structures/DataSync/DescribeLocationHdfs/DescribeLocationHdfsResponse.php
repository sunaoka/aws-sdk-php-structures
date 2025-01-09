<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationHdfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property list<Shapes\HdfsNameNode> $NameNodes
 * @property int<1048576, 1073741824> $BlockSize
 * @property int<1, 512> $ReplicationFactor
 * @property string $KmsKeyProviderUri
 * @property Shapes\QopConfiguration $QopConfiguration
 * @property 'SIMPLE'|'KERBEROS' $AuthenticationType
 * @property string $SimpleUser
 * @property string $KerberosPrincipal
 * @property list<string> $AgentArns
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeLocationHdfsResponse extends Response
{
}
