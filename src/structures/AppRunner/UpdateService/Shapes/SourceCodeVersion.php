<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BRANCH' $Type
 * @property string $Value
 */
class SourceCodeVersion extends Shape
{
    /**
     * @param array{
     *     Type: 'BRANCH',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
