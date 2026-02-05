<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SrtCallerSource>|null $SrtCallerSources
 * @property SrtListenerSettings|null $SrtListenerSettings
 */
class SrtSettings extends Shape
{
    /**
     * @param array{
     *     SrtCallerSources?: list<SrtCallerSource>|null,
     *     SrtListenerSettings?: SrtListenerSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
