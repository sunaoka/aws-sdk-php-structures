<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $s3Bucket
 * @property list<S3KeyOutput>|null $s3Keys
 * @property 'Prefix'|'Archive'|'File'|null $type
 * @property string|null $destination
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     s3Bucket?: string|null,
     *     s3Keys?: list<S3KeyOutput>|null,
     *     type?: 'Prefix'|'Archive'|'File'|null,
     *     destination?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
