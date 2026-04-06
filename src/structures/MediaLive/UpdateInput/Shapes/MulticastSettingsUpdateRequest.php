<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MulticastSourceUpdateRequest>|null $Sources
 */
class MulticastSettingsUpdateRequest extends Shape
{
    /**
     * @param array{Sources?: list<MulticastSourceUpdateRequest>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
