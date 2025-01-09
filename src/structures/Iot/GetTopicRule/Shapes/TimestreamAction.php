<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $databaseName
 * @property string $tableName
 * @property list<TimestreamDimension> $dimensions
 * @property TimestreamTimestamp $timestamp
 */
class TimestreamAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     databaseName: string,
     *     tableName: string,
     *     dimensions: list<TimestreamDimension>,
     *     timestamp?: TimestreamTimestamp
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
