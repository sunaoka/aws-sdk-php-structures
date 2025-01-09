<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\StartApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlinkRunConfiguration $FlinkRunConfiguration
 * @property list<SqlRunConfiguration> $SqlRunConfigurations
 * @property ApplicationRestoreConfiguration $ApplicationRestoreConfiguration
 */
class RunConfiguration extends Shape
{
    /**
     * @param array{
     *     FlinkRunConfiguration?: FlinkRunConfiguration,
     *     SqlRunConfigurations?: list<SqlRunConfiguration>,
     *     ApplicationRestoreConfiguration?: ApplicationRestoreConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
