<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxAbrBitrate
 * @property int $MaxRenditions
 * @property int $MinAbrBitrate
 * @property list<AutomatedAbrRule> $Rules
 */
class AutomatedAbrSettings extends Shape
{
    /**
     * @param array{
     *     MaxAbrBitrate?: int,
     *     MaxRenditions?: int,
     *     MinAbrBitrate?: int,
     *     Rules?: list<AutomatedAbrRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
