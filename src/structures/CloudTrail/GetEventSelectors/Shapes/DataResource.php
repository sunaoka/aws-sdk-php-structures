<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventSelectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property list<string> $Values
 */
class DataResource extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
