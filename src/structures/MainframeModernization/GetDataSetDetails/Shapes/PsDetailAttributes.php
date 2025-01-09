<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $encoding
 * @property string $format
 */
class PsDetailAttributes extends Shape
{
    /**
     * @param array{
     *     encoding: string,
     *     format: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
