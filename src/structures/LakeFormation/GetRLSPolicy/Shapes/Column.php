<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetRLSPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Type
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
