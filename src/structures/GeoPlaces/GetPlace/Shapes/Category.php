<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $LocalizedName
 * @property bool $Primary
 */
class Category extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     LocalizedName?: string,
     *     Primary?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
