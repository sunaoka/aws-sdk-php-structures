<?php

namespace Sunaoka\Aws\Structures\MTurk\GetQualificationScore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property string|null $Subdivision
 */
class Locale extends Shape
{
    /**
     * @param array{
     *     Country: string,
     *     Subdivision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
