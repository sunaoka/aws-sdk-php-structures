<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Confidence
 * @property bool|null $Value
 */
class CoversBodyPart extends Shape
{
    /**
     * @param array{
     *     Confidence?: float|null,
     *     Value?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
