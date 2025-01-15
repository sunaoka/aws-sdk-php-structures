<?php

namespace Sunaoka\Aws\Structures\Translate\ListParallelData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Uri
 * @property 'TSV'|'CSV'|'TMX'|null $Format
 */
class ParallelDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri?: string|null,
     *     Format?: 'TSV'|'CSV'|'TMX'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
