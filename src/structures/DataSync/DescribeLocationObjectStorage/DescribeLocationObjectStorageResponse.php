<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationObjectStorage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property string $AccessKey
 * @property int<1, 65536> $ServerPort
 * @property 'HTTPS'|'HTTP' $ServerProtocol
 * @property list<string> $AgentArns
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Psr\Http\Message\StreamInterface $ServerCertificate
 */
class DescribeLocationObjectStorageResponse extends Response
{
}
