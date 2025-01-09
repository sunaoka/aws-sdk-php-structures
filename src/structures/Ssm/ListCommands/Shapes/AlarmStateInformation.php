<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'UNKNOWN'|'ALARM' $State
 */
class AlarmStateInformation extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     State: 'UNKNOWN'|'ALARM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
