<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\StartApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property InputStartingPositionConfiguration $InputStartingPositionConfiguration
 */
class InputConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     InputStartingPositionConfiguration: InputStartingPositionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
