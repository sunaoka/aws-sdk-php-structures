<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AS_RUN'>|null $LogTypes
 */
class LogConfigurationForChannel extends Shape
{
    /**
     * @param array{LogTypes?: list<'AS_RUN'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
