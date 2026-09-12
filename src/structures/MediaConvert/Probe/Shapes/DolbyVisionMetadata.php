<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRESENT'|'ABSENT'|null $BaseLayer
 * @property 'PRESENT'|'ABSENT'|null $EnhancementLayer
 * @property int|null $Level
 * @property int|null $Profile
 * @property 'PRESENT'|'ABSENT'|null $Rpu
 */
class DolbyVisionMetadata extends Shape
{
    /**
     * @param array{
     *     BaseLayer?: 'PRESENT'|'ABSENT'|null,
     *     EnhancementLayer?: 'PRESENT'|'ABSENT'|null,
     *     Level?: int|null,
     *     Profile?: int|null,
     *     Rpu?: 'PRESENT'|'ABSENT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
