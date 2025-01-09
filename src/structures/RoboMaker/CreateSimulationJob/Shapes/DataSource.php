<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $s3Bucket
 * @property list<S3KeyOutput> $s3Keys
 * @property 'Prefix'|'Archive'|'File' $type
 * @property string $destination
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     s3Bucket?: string,
     *     s3Keys?: list<S3KeyOutput>,
     *     type?: 'Prefix'|'Archive'|'File',
     *     destination?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
