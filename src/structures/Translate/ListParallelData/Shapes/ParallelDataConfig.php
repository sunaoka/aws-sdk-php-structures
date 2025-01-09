<?php

namespace Sunaoka\Aws\Structures\Translate\ListParallelData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'TSV'|'CSV'|'TMX' $Format
 */
class ParallelDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri?: string,
     *     Format?: 'TSV'|'CSV'|'TMX'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
