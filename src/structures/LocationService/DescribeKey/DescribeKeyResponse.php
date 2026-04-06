<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $ExpireTime
 * @property string $Key
 * @property string $KeyArn
 * @property string $KeyName
 * @property Shapes\ApiKeyRestrictions $Restrictions
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class DescribeKeyResponse extends Response
{
}
