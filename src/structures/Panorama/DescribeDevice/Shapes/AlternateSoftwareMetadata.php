<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 */
class AlternateSoftwareMetadata extends Shape
{
    /**
     * @param array{Version?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
