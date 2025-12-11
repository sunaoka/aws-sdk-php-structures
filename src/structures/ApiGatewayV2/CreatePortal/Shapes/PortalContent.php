<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string $DisplayName
 * @property PortalTheme $Theme
 */
class PortalContent extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DisplayName: string,
     *     Theme: PortalTheme
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
