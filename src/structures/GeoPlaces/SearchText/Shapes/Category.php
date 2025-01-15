<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string|null $LocalizedName
 * @property bool|null $Primary
 */
class Category extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     LocalizedName?: string|null,
     *     Primary?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
