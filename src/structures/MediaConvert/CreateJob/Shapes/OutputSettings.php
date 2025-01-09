<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsSettings $HlsSettings
 */
class OutputSettings extends Shape
{
    /**
     * @param array{HlsSettings?: HlsSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
