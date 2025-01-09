<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlinkRunConfiguration $FlinkRunConfiguration
 * @property ApplicationRestoreConfiguration $ApplicationRestoreConfiguration
 */
class RunConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     FlinkRunConfiguration?: FlinkRunConfiguration,
     *     ApplicationRestoreConfiguration?: ApplicationRestoreConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
