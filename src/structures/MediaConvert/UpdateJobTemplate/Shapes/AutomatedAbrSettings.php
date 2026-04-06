<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100000, 100000000>|null $MaxAbrBitrate
 * @property int<3, 15>|null $MaxRenditions
 * @property int<100000, 100000000>|null $MinAbrBitrate
 * @property list<AutomatedAbrRule>|null $Rules
 */
class AutomatedAbrSettings extends Shape
{
    /**
     * @param array{
     *     MaxAbrBitrate?: int<100000, 100000000>|null,
     *     MaxRenditions?: int<3, 15>|null,
     *     MinAbrBitrate?: int<100000, 100000000>|null,
     *     Rules?: list<AutomatedAbrRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
