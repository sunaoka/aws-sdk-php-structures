<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SrtCallerSourceRequest>|null $SrtCallerSources
 */
class SrtSettingsRequest extends Shape
{
    /**
     * @param array{SrtCallerSources?: list<SrtCallerSourceRequest>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
