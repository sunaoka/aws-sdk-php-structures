<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\StartApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlinkRunConfiguration|null $FlinkRunConfiguration
 * @property list<SqlRunConfiguration>|null $SqlRunConfigurations
 * @property ApplicationRestoreConfiguration|null $ApplicationRestoreConfiguration
 */
class RunConfiguration extends Shape
{
    /**
     * @param array{
     *     FlinkRunConfiguration?: FlinkRunConfiguration|null,
     *     SqlRunConfigurations?: list<SqlRunConfiguration>|null,
     *     ApplicationRestoreConfiguration?: ApplicationRestoreConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
