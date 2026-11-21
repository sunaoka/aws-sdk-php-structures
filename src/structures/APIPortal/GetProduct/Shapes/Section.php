<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sectionName
 * @property list<string>|null $productApiPageArns
 */
class Section extends Shape
{
    /**
     * @param array{
     *     sectionName?: string|null,
     *     productApiPageArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
