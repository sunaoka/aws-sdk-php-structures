<?php

namespace Sunaoka\Aws\Structures\Iot\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mqttTopic
 * @property string $roleArn
 */
class MetricsExportConfig extends Shape
{
    /**
     * @param array{
     *     mqttTopic: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
