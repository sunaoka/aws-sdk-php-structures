<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SrtCallerSourceRequest>|null $SrtCallerSources
 * @property SrtListenerSettingsRequest|null $SrtListenerSettings
 */
class SrtSettingsRequest extends Shape
{
    /**
     * @param array{
     *     SrtCallerSources?: list<SrtCallerSourceRequest>|null,
     *     SrtListenerSettings?: SrtListenerSettingsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
