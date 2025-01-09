<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string $Pattern
 * @property Encryption $Encryption
 */
class CaptionFormat extends Shape
{
    /**
     * @param array{
     *     Format?: string,
     *     Pattern?: string,
     *     Encryption?: Encryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
