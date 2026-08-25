<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property 'V2'|'V3' $influxDBVersion
 * @property string $secretId
 * @property 'SecretString'|'SecretBinary'|null $secretType
 * @property string|null $secretKey
 */
class InfluxDBDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     influxDBVersion: 'V2'|'V3',
     *     secretId: string,
     *     secretType?: 'SecretString'|'SecretBinary'|null,
     *     secretKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
