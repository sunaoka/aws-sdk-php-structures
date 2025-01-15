<?php

namespace Sunaoka\Aws\Structures\Sms\GetApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverGroupId
 * @property string|null $name
 * @property list<Server>|null $serverList
 */
class ServerGroup extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string|null,
     *     name?: string|null,
     *     serverList?: list<Server>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
