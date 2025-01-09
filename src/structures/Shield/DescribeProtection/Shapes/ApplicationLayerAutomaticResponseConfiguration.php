<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property ResponseAction $Action
 */
class ApplicationLayerAutomaticResponseConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'DISABLED',
     *     Action: ResponseAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
