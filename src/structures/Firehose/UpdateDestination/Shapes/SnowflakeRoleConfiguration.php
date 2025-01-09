<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $SnowflakeRole
 */
class SnowflakeRoleConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     SnowflakeRole?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
