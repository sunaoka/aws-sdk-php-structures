<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProjectVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Asset>|null $Assets
 */
class TrainingData extends Shape
{
    /**
     * @param array{Assets?: list<Asset>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
