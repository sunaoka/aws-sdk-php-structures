<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $imageTestsEnabled
 * @property int<60, 1440>|null $timeoutMinutes
 */
class ImageTestsConfiguration extends Shape
{
    /**
     * @param array{
     *     imageTestsEnabled?: bool|null,
     *     timeoutMinutes?: int<60, 1440>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
