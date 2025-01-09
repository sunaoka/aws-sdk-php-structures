<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Aso
 * @property bool $IsNewForEntireAccount
 */
class NewAsoDetail extends Shape
{
    /**
     * @param array{
     *     Aso?: string,
     *     IsNewForEntireAccount?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
