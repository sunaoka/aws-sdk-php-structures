<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Category
 * @property list<SensitiveDataDetections>|null $Detections
 * @property int|null $TotalCount
 */
class SensitiveDataResult extends Shape
{
    /**
     * @param array{
     *     Category?: string|null,
     *     Detections?: list<SensitiveDataDetections>|null,
     *     TotalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
