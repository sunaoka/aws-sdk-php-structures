<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROTON'|'WINDOWS'|'UBUNTU' $Type
 * @property string $Version
 */
class RuntimeEnvironment extends Shape
{
    /**
     * @param array{
     *     Type: 'PROTON'|'WINDOWS'|'UBUNTU',
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
