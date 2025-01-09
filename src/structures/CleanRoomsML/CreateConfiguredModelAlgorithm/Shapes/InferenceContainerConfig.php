<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageUri
 */
class InferenceContainerConfig extends Shape
{
    /**
     * @param array{imageUri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
