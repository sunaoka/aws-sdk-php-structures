<?php

namespace Sunaoka\Aws\Structures\FSx\StartMisconfiguredStateRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $FsrmServiceEnabled
 * @property string|null $EventLogDestination
 */
class WindowsFsrmConfiguration extends Shape
{
    /**
     * @param array{
     *     FsrmServiceEnabled: bool,
     *     EventLogDestination?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
