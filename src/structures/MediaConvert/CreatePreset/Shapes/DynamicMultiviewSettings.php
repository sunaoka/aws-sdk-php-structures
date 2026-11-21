<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $Enabled
 * @property list<Rectangle>|null $Regions
 */
class DynamicMultiviewSettings extends Shape
{
    /**
     * @param array{
     *     Enabled?: 'DISABLED'|'ENABLED'|null,
     *     Regions?: list<Rectangle>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
