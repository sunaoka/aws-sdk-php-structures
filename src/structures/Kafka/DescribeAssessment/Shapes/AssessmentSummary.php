<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int>|null $ByCategory
 * @property array<string, int>|null $BySeverity
 * @property bool|null $FindingsCapped
 * @property bool|null $HasBlockingFindings
 * @property int|null $TotalFindings
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     ByCategory?: array<string, int>|null,
     *     BySeverity?: array<string, int>|null,
     *     FindingsCapped?: bool|null,
     *     HasBlockingFindings?: bool|null,
     *     TotalFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
