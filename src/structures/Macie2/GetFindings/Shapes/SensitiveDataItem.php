<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER' $category
 * @property list<DefaultDetection> $detections
 * @property int $totalCount
 */
class SensitiveDataItem extends Shape
{
    /**
     * @param array{
     *     category?: 'FINANCIAL_INFORMATION'|'PERSONAL_INFORMATION'|'CREDENTIALS'|'CUSTOM_IDENTIFIER',
     *     detections?: list<DefaultDetection>,
     *     totalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
