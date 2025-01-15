<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyName
 * @property \Aws\Api\DateTimeResult $ExpireTime
 * @property string|null $Description
 * @property ApiKeyRestrictions $Restrictions
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListKeysResponseEntry extends Shape
{
    /**
     * @param array{
     *     KeyName: string,
     *     ExpireTime: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     Restrictions: ApiKeyRestrictions,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
