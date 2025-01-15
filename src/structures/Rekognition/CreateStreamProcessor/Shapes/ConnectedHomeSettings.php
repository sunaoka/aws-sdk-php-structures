<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Labels
 * @property float|null $MinConfidence
 */
class ConnectedHomeSettings extends Shape
{
    /**
     * @param array{
     *     Labels: list<string>,
     *     MinConfidence?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
