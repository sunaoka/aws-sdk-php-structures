<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Format
 * @property string|null $Pattern
 * @property Encryption|null $Encryption
 */
class CaptionFormat extends Shape
{
    /**
     * @param array{
     *     Format?: string|null,
     *     Pattern?: string|null,
     *     Encryption?: Encryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
