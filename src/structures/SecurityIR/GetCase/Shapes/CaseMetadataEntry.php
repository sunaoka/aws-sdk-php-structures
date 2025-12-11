<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 */
class CaseMetadataEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
