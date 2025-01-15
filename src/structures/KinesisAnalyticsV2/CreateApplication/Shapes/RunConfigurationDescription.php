<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApplicationRestoreConfiguration|null $ApplicationRestoreConfigurationDescription
 * @property FlinkRunConfiguration|null $FlinkRunConfigurationDescription
 */
class RunConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationRestoreConfigurationDescription?: ApplicationRestoreConfiguration|null,
     *     FlinkRunConfigurationDescription?: FlinkRunConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
