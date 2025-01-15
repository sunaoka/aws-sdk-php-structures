<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateApplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PayloadData
 */
class ManifestOverridesPayload extends Shape
{
    /**
     * @param array{PayloadData?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
