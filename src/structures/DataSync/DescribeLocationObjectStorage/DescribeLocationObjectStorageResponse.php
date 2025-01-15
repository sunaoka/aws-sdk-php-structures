<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationObjectStorage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property string|null $AccessKey
 * @property int<1, 65536>|null $ServerPort
 * @property 'HTTPS'|'HTTP'|null $ServerProtocol
 * @property list<string>|null $AgentArns
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Psr\Http\Message\StreamInterface|null $ServerCertificate
 */
class DescribeLocationObjectStorageResponse extends Response
{
}
