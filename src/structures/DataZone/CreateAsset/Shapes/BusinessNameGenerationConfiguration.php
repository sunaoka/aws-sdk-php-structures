<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class BusinessNameGenerationConfiguration extends Shape
{
    /**
     * @param array{enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
