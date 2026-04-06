<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $ExpireTime
 * @property string $KeyName
 * @property ApiKeyRestrictions $Restrictions
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListKeysResponseEntry extends Shape
{
    /**
     * @param array{
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     ExpireTime: \Aws\Api\DateTimeResult,
     *     KeyName: string,
     *     Restrictions: ApiKeyRestrictions,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
