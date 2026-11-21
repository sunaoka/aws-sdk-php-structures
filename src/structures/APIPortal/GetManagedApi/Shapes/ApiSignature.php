<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetManagedApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property 'GET'|'POST'|'PUT'|'DELETE'|'PATCH'|'ANY'|'HEAD'|'OPTIONS' $method
 * @property string $hostname
 * @property int<0, 65535> $port
 * @property string $path
 */
class ApiSignature extends Shape
{
    /**
     * @param array{
     *     resourceArn: string,
     *     method: 'GET'|'POST'|'PUT'|'DELETE'|'PATCH'|'ANY'|'HEAD'|'OPTIONS',
     *     hostname: string,
     *     port: int<0, 65535>,
     *     path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
