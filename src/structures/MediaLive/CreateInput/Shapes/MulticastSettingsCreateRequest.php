<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MulticastSourceCreateRequest>|null $Sources
 */
class MulticastSettingsCreateRequest extends Shape
{
    /**
     * @param array{Sources?: list<MulticastSourceCreateRequest>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
