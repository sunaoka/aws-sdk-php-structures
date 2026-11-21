<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomColors $customColors
 * @property \Aws\Api\DateTimeResult|null $logoUploadedAt
 */
class PortalTheme extends Shape
{
    /**
     * @param array{
     *     customColors: CustomColors,
     *     logoUploadedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
