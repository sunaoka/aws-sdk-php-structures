<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApplicationRestoreConfiguration $ApplicationRestoreConfigurationDescription
 * @property FlinkRunConfiguration $FlinkRunConfigurationDescription
 */
class RunConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationRestoreConfigurationDescription?: ApplicationRestoreConfiguration,
     *     FlinkRunConfigurationDescription?: FlinkRunConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
