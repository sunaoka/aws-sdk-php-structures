<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RtmpPushNamingConfiguration $NamingConfiguration
 */
class SetRtmpPushSourceSettings extends Shape
{
    /**
     * @param array{NamingConfiguration: RtmpPushNamingConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
