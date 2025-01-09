<?php

namespace Sunaoka\Aws\Structures\MTurk\ListHITs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property string $Subdivision
 */
class Locale extends Shape
{
    /**
     * @param array{
     *     Country: string,
     *     Subdivision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
