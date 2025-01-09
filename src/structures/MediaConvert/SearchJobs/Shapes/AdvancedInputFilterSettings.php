<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $AddTexture
 * @property 'OFF'|'LOW'|'HIGH' $Sharpening
 */
class AdvancedInputFilterSettings extends Shape
{
    /**
     * @param array{
     *     AddTexture?: 'ENABLED'|'DISABLED',
     *     Sharpening?: 'OFF'|'LOW'|'HIGH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
