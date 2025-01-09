<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100000, 100000000> $MaxAbrBitrate
 * @property int<3, 15> $MaxRenditions
 * @property int<100000, 100000000> $MinAbrBitrate
 * @property list<AutomatedAbrRule> $Rules
 */
class AutomatedAbrSettings extends Shape
{
    /**
     * @param array{
     *     MaxAbrBitrate?: int<100000, 100000000>,
     *     MaxRenditions?: int<3, 15>,
     *     MinAbrBitrate?: int<100000, 100000000>,
     *     Rules?: list<AutomatedAbrRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
