<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationArn
 * @property string $roleArn
 * @property string $databaseName
 * @property string $tableName
 * @property string|null $organization
 * @property array<string, string>|null $tags
 * @property 's'|'ms'|'us'|'ns'|null $timestampUnit
 * @property InfluxDBBatchConfig|null $batchConfig
 */
class InfluxDBAction extends Shape
{
    /**
     * @param array{
     *     destinationArn: string,
     *     roleArn: string,
     *     databaseName: string,
     *     tableName: string,
     *     organization?: string|null,
     *     tags?: array<string, string>|null,
     *     timestampUnit?: 's'|'ms'|'us'|'ns'|null,
     *     batchConfig?: InfluxDBBatchConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
