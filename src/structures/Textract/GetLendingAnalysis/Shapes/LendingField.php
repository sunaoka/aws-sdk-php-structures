<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property LendingDetection|null $KeyDetection
 * @property list<LendingDetection>|null $ValueDetections
 */
class LendingField extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     KeyDetection?: LendingDetection|null,
     *     ValueDetections?: list<LendingDetection>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
