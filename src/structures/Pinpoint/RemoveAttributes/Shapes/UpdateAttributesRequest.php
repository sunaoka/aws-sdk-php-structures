<?php

namespace Sunaoka\Aws\Structures\Pinpoint\RemoveAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Blacklist
 */
class UpdateAttributesRequest extends Shape
{
    /**
     * @param array{Blacklist?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
