<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashTtmlConfiguration|null $TtmlConfiguration
 */
class DashSubtitleConfiguration extends Shape
{
    /**
     * @param array{TtmlConfiguration?: DashTtmlConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
