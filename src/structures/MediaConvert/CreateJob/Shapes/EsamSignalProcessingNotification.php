<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SccXml
 */
class EsamSignalProcessingNotification extends Shape
{
    /**
     * @param array{SccXml?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
