<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property LendingDetection $KeyDetection
 * @property list<LendingDetection> $ValueDetections
 */
class LendingField extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     KeyDetection?: LendingDetection,
     *     ValueDetections?: list<LendingDetection>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
