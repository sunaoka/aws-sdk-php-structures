<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $backgroundColor
 * @property string $navigationColor
 * @property string $headerColor
 * @property string $textColor
 * @property string $accentColor
 * @property string $errorValidationColor
 */
class CustomColors extends Shape
{
    /**
     * @param array{
     *     backgroundColor: string,
     *     navigationColor: string,
     *     headerColor: string,
     *     textColor: string,
     *     accentColor: string,
     *     errorValidationColor: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
