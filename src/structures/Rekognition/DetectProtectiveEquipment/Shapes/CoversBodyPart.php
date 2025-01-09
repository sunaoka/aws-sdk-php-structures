<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Confidence
 * @property bool $Value
 */
class CoversBodyPart extends Shape
{
    /**
     * @param array{
     *     Confidence?: float,
     *     Value?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
