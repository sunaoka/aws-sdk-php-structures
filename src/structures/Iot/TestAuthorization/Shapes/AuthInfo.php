<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLISH'|'SUBSCRIBE'|'RECEIVE'|'CONNECT'|null $actionType
 * @property list<string> $resources
 */
class AuthInfo extends Shape
{
    /**
     * @param array{
     *     actionType?: 'PUBLISH'|'SUBSCRIBE'|'RECEIVE'|'CONNECT'|null,
     *     resources: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
