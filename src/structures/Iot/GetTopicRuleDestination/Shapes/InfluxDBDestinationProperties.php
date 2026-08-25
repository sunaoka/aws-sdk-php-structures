<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $endpoint
 * @property 'V2'|'V3'|null $influxDBVersion
 * @property string|null $secretId
 * @property 'SecretString'|'SecretBinary'|null $secretType
 * @property string|null $secretKey
 */
class InfluxDBDestinationProperties extends Shape
{
    /**
     * @param array{
     *     endpoint?: string|null,
     *     influxDBVersion?: 'V2'|'V3'|null,
     *     secretId?: string|null,
     *     secretType?: 'SecretString'|'SecretBinary'|null,
     *     secretKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
