<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstanceDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PayloadData
 */
class ManifestPayload extends Shape
{
    /**
     * @param array{PayloadData?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
