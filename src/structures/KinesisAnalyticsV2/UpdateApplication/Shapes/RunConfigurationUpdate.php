<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlinkRunConfiguration|null $FlinkRunConfiguration
 * @property ApplicationRestoreConfiguration|null $ApplicationRestoreConfiguration
 */
class RunConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     FlinkRunConfiguration?: FlinkRunConfiguration|null,
     *     ApplicationRestoreConfiguration?: ApplicationRestoreConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
