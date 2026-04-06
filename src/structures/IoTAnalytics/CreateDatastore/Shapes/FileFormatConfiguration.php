<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JsonConfiguration|null $jsonConfiguration
 * @property ParquetConfiguration|null $parquetConfiguration
 */
class FileFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     jsonConfiguration?: JsonConfiguration|null,
     *     parquetConfiguration?: ParquetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
