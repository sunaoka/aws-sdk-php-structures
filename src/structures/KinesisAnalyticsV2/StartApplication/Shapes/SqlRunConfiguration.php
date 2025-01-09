<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\StartApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputId
 * @property InputStartingPositionConfiguration $InputStartingPositionConfiguration
 */
class SqlRunConfiguration extends Shape
{
    /**
     * @param array{
     *     InputId: string,
     *     InputStartingPositionConfiguration: InputStartingPositionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
