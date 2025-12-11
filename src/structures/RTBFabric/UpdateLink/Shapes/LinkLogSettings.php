<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LinkApplicationLogConfiguration $applicationLogs
 */
class LinkLogSettings extends Shape
{
    /**
     * @param array{applicationLogs: LinkApplicationLogConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
