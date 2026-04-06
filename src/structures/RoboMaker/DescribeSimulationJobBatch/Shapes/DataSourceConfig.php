<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $s3Bucket
 * @property list<string> $s3Keys
 * @property 'Prefix'|'Archive'|'File'|null $type
 * @property string|null $destination
 */
class DataSourceConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     s3Bucket: string,
     *     s3Keys: list<string>,
     *     type?: 'Prefix'|'Archive'|'File'|null,
     *     destination?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
