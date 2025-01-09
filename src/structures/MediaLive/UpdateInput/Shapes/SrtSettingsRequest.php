<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SrtCallerSourceRequest> $SrtCallerSources
 */
class SrtSettingsRequest extends Shape
{
    /**
     * @param array{SrtCallerSources?: list<SrtCallerSourceRequest>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
