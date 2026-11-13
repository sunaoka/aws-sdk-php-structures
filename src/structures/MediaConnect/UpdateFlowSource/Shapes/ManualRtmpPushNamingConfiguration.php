<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $StreamName
 */
class ManualRtmpPushNamingConfiguration extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     StreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
