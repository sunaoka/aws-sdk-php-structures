<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstanceDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PayloadData
 */
class ManifestPayload extends Shape
{
    /**
     * @param array{PayloadData?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
