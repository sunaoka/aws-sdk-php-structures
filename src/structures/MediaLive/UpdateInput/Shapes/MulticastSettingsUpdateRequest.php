<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MulticastSourceUpdateRequest> $Sources
 */
class MulticastSettingsUpdateRequest extends Shape
{
    /**
     * @param array{Sources?: list<MulticastSourceUpdateRequest>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
