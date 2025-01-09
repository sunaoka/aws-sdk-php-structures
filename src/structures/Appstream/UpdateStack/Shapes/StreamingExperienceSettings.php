<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TCP'|'UDP' $PreferredProtocol
 */
class StreamingExperienceSettings extends Shape
{
    /**
     * @param array{PreferredProtocol?: 'TCP'|'UDP'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
