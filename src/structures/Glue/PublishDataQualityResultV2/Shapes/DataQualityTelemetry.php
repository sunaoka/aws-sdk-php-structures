<?php

namespace Sunaoka\Aws\Structures\Glue\PublishDataQualityResultV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $VcpuHours
 * @property array<string, string>|null $FlagsEnabled
 * @property string|null $LibraryVersion
 * @property string|null $SparkVersion
 * @property string|null $HostRuntimeVersion
 * @property 'SPARK'|'PYTHON'|null $Engine
 */
class DataQualityTelemetry extends Shape
{
    /**
     * @param array{
     *     VcpuHours?: double|null,
     *     FlagsEnabled?: array<string, string>|null,
     *     LibraryVersion?: string|null,
     *     SparkVersion?: string|null,
     *     HostRuntimeVersion?: string|null,
     *     Engine?: 'SPARK'|'PYTHON'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
