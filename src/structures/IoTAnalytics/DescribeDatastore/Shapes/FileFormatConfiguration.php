<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JsonConfiguration $jsonConfiguration
 * @property ParquetConfiguration $parquetConfiguration
 */
class FileFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     jsonConfiguration?: JsonConfiguration,
     *     parquetConfiguration?: ParquetConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
