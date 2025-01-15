<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Aso
 * @property bool|null $IsNewForEntireAccount
 */
class NewAsoDetail extends Shape
{
    /**
     * @param array{
     *     Aso?: string|null,
     *     IsNewForEntireAccount?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
