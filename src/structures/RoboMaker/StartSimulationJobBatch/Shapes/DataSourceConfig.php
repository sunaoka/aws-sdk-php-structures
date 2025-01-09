<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $s3Bucket
 * @property list<string> $s3Keys
 * @property 'Prefix'|'Archive'|'File' $type
 * @property string $destination
 */
class DataSourceConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     s3Bucket: string,
     *     s3Keys: list<string>,
     *     type?: 'Prefix'|'Archive'|'File',
     *     destination?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
