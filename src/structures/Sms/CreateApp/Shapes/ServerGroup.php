<?php

namespace Sunaoka\Aws\Structures\Sms\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverGroupId
 * @property string $name
 * @property list<Server> $serverList
 */
class ServerGroup extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string,
     *     name?: string,
     *     serverList?: list<Server>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
