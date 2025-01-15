<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SeedUrlConfiguration|null $SeedUrlConfiguration
 * @property SiteMapsConfiguration|null $SiteMapsConfiguration
 */
class Urls extends Shape
{
    /**
     * @param array{
     *     SeedUrlConfiguration?: SeedUrlConfiguration|null,
     *     SiteMapsConfiguration?: SiteMapsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
