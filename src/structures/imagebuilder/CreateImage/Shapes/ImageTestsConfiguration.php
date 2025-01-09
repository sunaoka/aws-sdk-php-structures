<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $imageTestsEnabled
 * @property int<60, 1440> $timeoutMinutes
 */
class ImageTestsConfiguration extends Shape
{
    /**
     * @param array{
     *     imageTestsEnabled?: bool,
     *     timeoutMinutes?: int<60, 1440>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
