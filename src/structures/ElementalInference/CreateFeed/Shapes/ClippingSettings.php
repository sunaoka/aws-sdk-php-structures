<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputName
 */
class ClippingSettings extends Shape
{
    /**
     * @param array{outputName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
