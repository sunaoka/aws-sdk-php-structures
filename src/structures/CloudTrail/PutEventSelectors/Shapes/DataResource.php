<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventSelectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property list<string>|null $Values
 */
class DataResource extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
