<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $imageTestsEnabled
 * @property int $timeoutMinutes
 */
class ImageTestsConfiguration extends Shape
{
    /**
     * @param array{
     *     imageTestsEnabled?: bool,
     *     timeoutMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
