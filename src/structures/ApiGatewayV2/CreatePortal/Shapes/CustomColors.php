<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccentColor
 * @property string $BackgroundColor
 * @property string $ErrorValidationColor
 * @property string $HeaderColor
 * @property string $NavigationColor
 * @property string $TextColor
 */
class CustomColors extends Shape
{
    /**
     * @param array{
     *     AccentColor: string,
     *     BackgroundColor: string,
     *     ErrorValidationColor: string,
     *     HeaderColor: string,
     *     NavigationColor: string,
     *     TextColor: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
