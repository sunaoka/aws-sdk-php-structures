<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Labels
 * @property float $MinConfidence
 */
class ConnectedHomeSettingsForUpdate extends Shape
{
    /**
     * @param array{
     *     Labels?: list<string>,
     *     MinConfidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
