<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomColors $CustomColors
 * @property \Aws\Api\DateTimeResult|null $LogoLastUploaded
 */
class PortalTheme extends Shape
{
    /**
     * @param array{
     *     CustomColors: CustomColors,
     *     LogoLastUploaded?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
