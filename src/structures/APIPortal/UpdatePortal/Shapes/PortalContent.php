<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string|null $description
 * @property PortalTheme $theme
 */
class PortalContent extends Shape
{
    /**
     * @param array{
     *     displayName: string,
     *     description?: string|null,
     *     theme: PortalTheme
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
