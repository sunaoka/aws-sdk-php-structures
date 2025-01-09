<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Category
 * @property list<SensitiveDataDetections> $Detections
 * @property int $TotalCount
 */
class SensitiveDataResult extends Shape
{
    /**
     * @param array{
     *     Category?: string,
     *     Detections?: list<SensitiveDataDetections>,
     *     TotalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
