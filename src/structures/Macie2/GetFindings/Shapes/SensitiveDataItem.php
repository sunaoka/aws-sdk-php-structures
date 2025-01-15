<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER'|null $category
 * @property list<DefaultDetection>|null $detections
 * @property int|null $totalCount
 */
class SensitiveDataItem extends Shape
{
    /**
     * @param array{
     *     category?: 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER'|null,
     *     detections?: list<DefaultDetection>|null,
     *     totalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
