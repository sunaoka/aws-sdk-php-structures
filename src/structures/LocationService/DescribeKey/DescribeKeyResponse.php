<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Key
 * @property string $KeyArn
 * @property string $KeyName
 * @property Shapes\ApiKeyRestrictions $Restrictions
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $ExpireTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property string $Description
 * @property array<string, string> $Tags
 */
class DescribeKeyResponse extends Response
{
}
