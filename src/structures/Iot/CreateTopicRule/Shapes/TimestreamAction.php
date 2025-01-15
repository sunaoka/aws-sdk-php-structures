<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $databaseName
 * @property string $tableName
 * @property list<TimestreamDimension> $dimensions
 * @property TimestreamTimestamp|null $timestamp
 */
class TimestreamAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     databaseName: string,
     *     tableName: string,
     *     dimensions: list<TimestreamDimension>,
     *     timestamp?: TimestreamTimestamp|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
