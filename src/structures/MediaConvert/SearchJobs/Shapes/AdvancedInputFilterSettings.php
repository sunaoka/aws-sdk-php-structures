<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $AddTexture
 * @property 'OFF'|'LOW'|'HIGH'|null $Sharpening
 */
class AdvancedInputFilterSettings extends Shape
{
    /**
     * @param array{
     *     AddTexture?: 'ENABLED'|'DISABLED'|null,
     *     Sharpening?: 'OFF'|'LOW'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
